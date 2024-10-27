/* General page styling */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('bg.jpg'); /* Pet shop background */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #333333; /* Default body text color (dark gray) */
    background-color: #f8f9fa; /* Light background for contrast */
}

/* Header styling */
.font-head {
    color: #FFD700; /* Gold color for the header text */
}

.header-content .text-end button.radius {
    color: #FAEBCD; /* Light cream text color for buttons */
    background-color: #4a86e8;
    border-radius: 20px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.header-content .text-end button.radius:hover {
    background-color: #3b6bbf; /* Darker blue on hover */
    color: white; /* White text color on hover */
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 15px;
    text-align: center;
}

th {
    background-color: #4a86e8; /* Header row background */
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2; /* Alternating row background */
}

tr:hover {
    background-color: #e6f2ff; /* Row hover effect */
}

/* Links styling */
a {
    text-decoration: none;
    color: #FAEBCD; /* Light cream color */
    background-color: #4a86e8;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

a:hover {
    background-color: #3b6bbf;
    color: white; /* Change text to white on hover */
}

/* Headings */
h1 {
    text-align: center;
    margin-top: 20px;
}

h2 {
    color: #FF6347; /* Tomato color for headings */
}

/* Paragraphs */
p {
    color: #2F4F4F; /* Dark Slate Gray color */
}

/* Footer styling */
.footer {
    background-color: #343a40; /* Dark background for footer */
    color: #FAEBCD; /* Light cream text in the footer */
    padding: 20px 0;
    text-align: center;
}
