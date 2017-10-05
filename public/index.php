<?php
define('ROOT', __DIR__);
// as per RFC 3986
// @see http://tools.ietf.org/html/rfc3986#section-5.2.4
function remove_dot_segments($input) {
    // 1.  The input buffer is initialized with the now-appended path
    //     components and the output buffer is initialized to the empty
    //     string.
    $output = '';

    // 2.  While the input buffer is not empty, loop as follows:
    while ($input !== '') {
        // A.  If the input buffer begins with a prefix of "`../`" or "`./`",
        //     then remove that prefix from the input buffer; otherwise,
        if (
            ($prefix = substr($input, 0, 3)) == '../' ||
            ($prefix = substr($input, 0, 2)) == './'
           ) {
            $input = substr($input, strlen($prefix));
        } else

        // B.  if the input buffer begins with a prefix of "`/./`" or "`/.`",
        //     where "`.`" is a complete path segment, then replace that
        //     prefix with "`/`" in the input buffer; otherwise,
        if (
            ($prefix = substr($input, 0, 3)) == '/./' ||
            ($prefix = $input) == '/.'
           ) {
            $input = '/' . substr($input, strlen($prefix));
        } else

        // C.  if the input buffer begins with a prefix of "/../" or "/..",
        //     where "`..`" is a complete path segment, then replace that
        //     prefix with "`/`" in the input buffer and remove the last
        //     segment and its preceding "/" (if any) from the output
        //     buffer; otherwise,
        if (
            ($prefix = substr($input, 0, 4)) == '/../' ||
            ($prefix = $input) == '/..'
           ) {
            $input = '/' . substr($input, strlen($prefix));
            $output = substr($output, 0, strrpos($output, '/'));
        } else

        // D.  if the input buffer consists only of "." or "..", then remove
        //     that from the input buffer; otherwise,
        if ($input == '.' || $input == '..') {
            $input = '';
        } else

        // E.  move the first path segment in the input buffer to the end of
        //     the output buffer, including the initial "/" character (if
        //     any) and any subsequent characters up to, but not including,
        //     the next "/" character or the end of the input buffer.
        {
            $pos = strpos($input, '/');
            if ($pos === 0) $pos = strpos($input, '/', $pos+1);
            if ($pos === false) $pos = strlen($input);
            $output .= substr($input, 0, $pos);
            $input = (string) substr($input, $pos);
        }
    }

    // 3.  Finally, the output buffer is returned as the result of remove_dot_segments.
    return $output;
}

function abs_path($part_path) {
  return realpath(__DIR__ . DIRECTORY_SEPARATOR . 'page' . DIRECTORY_SEPARATOR . $part_path);
}

function return_include($include, ...$params) {
	ob_start();
	include $include;
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}

function page($head, $menu, $page, $footer) {
	$title = str_replace('-', ' ', ucfirst(basename($page, '.php')));
	if ($title == 'Index') $title = 'Strategii de succes';
  yield return_include($head, $title);
	yield return_include($menu, $page);
	yield return_include($page);
	yield return_include($footer);
}

function page_simple($page) {
	$menu = 'menu/simple';
	$nodots = remove_dot_segments($page);
	if ('/' == $nodots) $nodots = 'index' and $menu = 'menu/home';
	$nodots = "s/$nodots";
  $parts = ['head', $menu, $nodots, 'footer'];
  $parts = array_map(function($elem) {
    return abs_path($elem . '.php');
  }, $parts);

	return parts_join($parts, 2);
}

function page_message($message) {
	$menu = 'menu/simple';
  $parts = ['head', $menu, $message, 'footer'];
  $parts = array_map(function($elem) {
    return abs_path($elem . '.php');
  }, $parts);

	$out = '';
  foreach(page(...$parts) as $inx => $part) {
		if (empty($part)) { 
      $part = $inx == 2 ? sprintf('<main><section><div class="container"><div class="col-sm-12"><p class="heading alert alert-danger">%s</p></div></div></section></main>', $message) : '';
    }
    $out .= $part;
  };
	return $out;
}

function parts_join($parts, $foundable) {
  $out = '';
  foreach(page(...$parts) as $inx => $part) {
		// '' is a false
		if (empty($part)) { 
      return 
        $inx == $foundable 
        ? [page_message('Pagina nu a putut fi gasita'), 404] 
        : [page_message('Pagina nu a putut fi livrata'), 500];
    }
    $out .= $part;
  };
  return [$out, 200];
}

$uri = $_SERVER['REQUEST_URI'];
if ($uri == '/descarca-harta') {
	$filePublic = '/images/map.png';
	$file = ROOT . $filePublic;
	header('Content-Type: image/png');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: ' . filesize($file));
	header('Content-Disposition: attachment; filename="harta agrafics"');
	readfile($file);
	exit;
}

list($rendered, $code) = page_simple($uri);
switch ($code) {
  case 500:
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    break;
  case 404;
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
    break;
}
echo $rendered;
