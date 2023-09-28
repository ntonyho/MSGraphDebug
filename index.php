<?

header('Content-Type: application/json');

//$output->value[] = ['id'=> 'REQUEST_URI', 'value'=>$_SERVER['REQUEST_URI']];
$output = (object)[];
foreach (apache_request_headers() as $name => $value) {
	$output->value[] = ['id'=> $name, 'value'=>$value];
}

echo json_encode($output, JSON_PRETTY_PRINT);
?>