<?php
$projects = [
    [
        "title" => "Web Design",
        "image" => "images/project1.jpg",
        "description" => "Designed this website",
        "link" => "#"
    ],
    [
        "title" => "Mobile Application",
        "image" => "images/project2.jpg",
        "description" => "App about 30 days abs challenge",
        "link" => "#"
    ],
    [
        "title" => "Database Project",
        "image" => "images/project3.jpg",
        "description" => "Project about a gas company",
        "link" => "#"
    ],
    [
        "title" => "Parallel Programming",
        "image" => "images/project4.jpg",
        "description" => "Data Compression (Using Huffman Algorithm)",
        "link" => "#"
    ],
    [
        "title" => "Coming Soon",
        "image" => "images/project5.jpg",
        "description" => "...",
        "link" => "#"
    ],
    [
        "title" => "Coming Soon",
        "image" => "images/project6.jpg",
        "description" => "...",
        "link" => "#"
    ]
];

foreach ($projects as $project) {
    echo '<div class="projects-box">';
    echo '<img src="' . $project['image'] . '" alt="' . $project['title'] . '">';
    echo '<div class="projects-layer">';
    echo '<h4>' . $project['title'] . '</h4>';
    echo '<p>' . $project['description'] . '</p>';
    echo '<a href="' . $project['link'] . '"><i class=\'bx bx-link-external\' ></i></a>';
    echo '</div>';
    echo '</div>';
}
?>
