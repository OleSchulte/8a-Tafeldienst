fetch("getNames.php")
    .then(response => response.json())
    .then(names => displayRandomNames(names))
    .catch(error => console.error(error));
