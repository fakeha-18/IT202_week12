<?php
// Week Twelve Class Participation: check a dog breed using an array of six names.
header('Content-Type: text/plain; charset=UTF-8');

$dogBreeds = array(
    'Beagle',
    'Bulldog',
    'Chihuahua',
    'German Shepherd',
    'Golden Retriever',
    'Poodle'
);

$typedName = trim($_GET['breed'] ?? '');

if ($typedName === '') {
    echo '';
    exit;
}

// Match the start of a breed's name while the user types (not case-sensitive).
$matches = array();
foreach ($dogBreeds as $breed) {
    if (stripos($breed, $typedName) === 0) {
        $matches[] = $breed;
    }
}

if (count($matches) > 0) {
    echo implode(', ', $matches);
} else {
    echo 'Dog breed cannot be found.';
}
?>
