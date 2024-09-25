<!DOCTYPE html>
<html lang="en">

<head>
    <title>City Journeys</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marc-Philipp Esser">
    <meta name="content" content="Find your next city travel destination">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <!-- Navbar -->
        <div class="navbar">
            <div class="logo">Logo</div>
            <div class="navbar-link">
                <ul>
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                </ul>
            </div>
        </div>

        <!-- Filter Modal -->
        <div class="filter-menu">
            <div class="modal hidden">
                <button class="btn-close">⨉</button>
                <h3>Filters</h3>
                <p style="color: var(--hint-color)">Select filters according to your preferences
                </p>

                <fieldset class="checkbox-group">
                    <legend class="checkbox-group-legend">Region</legend>
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img src="./images/filter_icons/european-union.svg" width="40" height="auto">
                                </span>
                                <span class="checkbox-label">Europe</span>
                            </span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img src="./images/filter_icons/south-america.svg" width="40" height="auto">
                                </span>
                                <span class="checkbox-label">South America</span>
                            </span>
                        </label>
                    </div>
                </fieldset>

                <button class="btn-submit">Apply</button>

            </div>

            <div class="overlay hidden"></div>
            <button class="btn-open">Show Filters</button>
        </div>

        <!-- Sorting Criteria Menu -->
        <div class="sorting-menu">
            <form action="/action_page.php">
                <label for="sorting-criteria">Sort By</label>
                <select name="sorting-criteria" id="sorting-criteria">
                    <optgroup label="Budget">
                        <option value="price">Overall Cost</option>
                        <option value="saab">Flight Costs</option>
                    </optgroup>
                    <optgroup label="Score">
                        <option value="family-score">Family score</option>
                        <option value="quality-of-life">Quality of life</option>
                    </optgroup>
                </select>
                <input type="submit" value="Submit">
            </form>
        </div>

        <!-- City Cards -->
        <div class="city-grid">
            <div class="card">
                <div class="card-title">
                    <span>Berlin</span>
                    <span>🇩🇪</span>
                </div>
                <a href="/city.php"><img class="card-image" src="./images/cities/berlin.jpg" alt="Berlin"></a>
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Florence</span>
                    <span>🇮🇹</span>
                </div>
                <img class="card-image" src="./images/cities/florence.jpg" alt="Florence">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Lisbon</span>
                    <span>🇵🇹</span>
                </div>
                <img class="card-image" src="./images/cities/lisbon.jpg" alt="Lisbon">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Madrid</span>
                    <span>🇪🇸</span>
                </div>
                <img class="card-image" src="./images/cities/madrid.jpg" alt="Madrid">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>New York</span>
                    <span>🇺🇸</span>
                </div>
                <img class="card-image" src="./images/cities/new-york.jpg" alt="New York">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Paris</span>
                    <span>🇫🇷</span>
                </div>
                <img class="card-image" src="./images/cities/paris.jpg" alt="Paris">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Rome</span>
                    <span>🇮🇹</span>
                </div>
                <img class="card-image" src="./images/cities/rome.jpg" alt="Rome">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>San Francisco</span>
                    <span>🇺🇸</span>
                </div>
                <img class="card-image" src="./images/cities/san-francisco.jpg" alt="San Francisco">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Tokyo</span>
                    <span>🇯🇵</span>
                </div>
                <img class="card-image" src="./images/cities/tokyo.jpg" alt="Tokyo">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Berlin</span>
                    <span>🇩🇪</span>
                </div>
                <img class="card-image" src="./images/cities/berlin.jpg" alt="Berlin">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Florence</span>
                    <span>🇮🇹</span>
                </div>
                <img class="card-image" src="./images/cities/florence.jpg" alt="Florence">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Lisbon</span>
                    <span>🇵🇹</span>
                </div>
                <img class="card-image" src="./images/cities/lisbon.jpg" alt="Lisbon">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Madrid</span>
                    <span>🇪🇸</span>
                </div>
                <img class="card-image" src="./images/cities/madrid.jpg" alt="Madrid">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>New York</span>
                    <span>🇺🇸</span>
                </div>
                <img class="card-image" src="./images/cities/new-york.jpg" alt="New York">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Paris</span>
                    <span>🇫🇷</span>
                </div>
                <img class="card-image" src="./images/cities/paris.jpg" alt="Paris">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Rome</span>
                    <span>🇮🇹</span>
                </div>
                <img class="card-image" src="./images/cities/rome.jpg" alt="Rome">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>San Francisco</span>
                    <span>🇺🇸</span>
                </div>
                <img class="card-image" src="./images/cities/san-francisco.jpg" alt="San Francisco">
            </div>
            <div class="card">
                <div class="card-title">
                    <span>Tokyo</span>
                    <span>🇯🇵</span>
                </div>
                <img class="card-image" src="./images/cities/tokyo.jpg" alt="Tokyo">
            </div>
        </div>

        <script>
            const modal = document.querySelector(".modal");
            const overlay = document.querySelector(".overlay");
            const openModalBtn = document.querySelector(".btn-open");
            const closeModalBtn = document.querySelector(".btn-close");

            const openModal = function () {
                modal.classList.remove("hidden");
                overlay.classList.remove("hidden");
            };

            openModalBtn.addEventListener("click", openModal);

            const closeModal = function () {
                modal.classList.add("hidden");
                overlay.classList.add("hidden");
            };

            closeModalBtn.addEventListener("click", closeModal);
        </script>

    </div>
</body>

<footer>
    <!-- Footer -->
    <!-- <div class="footer">Footer</div> -->
</footer>

</html>