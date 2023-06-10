?php
if(!is_dir('assets')) {
    mkdir('assets');
    echo 'Assets folder created successfully!<br>';
} else {
    echo 'Assets folder already exists.<br>';
}

if(!is_dir('assets/css')) {
    mkdir('assets/css');
    echo 'CSS folder created successfully!<br>';
} else {
    echo 'CSS folder already exists.<br>';
}

if(!is_dir('assets/images')) {
    mkdir('assets/images');
    echo 'Images folder created successfully!<br>';
} else {
    echo 'Images folder already exists.<br>';
}
