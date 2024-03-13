<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Siti Suki</title>
<link rel="stylesheet" href="evalution.css">
</head>
<body>
    <?php include '../includes/nav-bar-brown.php';?>

<main>
    <section id="profile">
        <div class="imageicon">
            <img src="../Images/student-icon.svg" alt="Profile Picture">
            <h1>SITI SUKI</h1>
        </div>
        
        <article id="recipe">
            <img src="../Images/kek pisang.png" alt="Kek Pisang Mereilt">
            <h2>Kek Pisang Mereilt</h2>
            <ul class="ingredients">
                <li>1/2 cawan / 100g gula kastor</li>
                <li>1/2 cawan / 100g gula perang</li>
                <li>***boleh kurangkan gula jika suka kurang manis</li>
                <li>4 biji telur saiz B (kalau saiz A 3 biji)</li>
                <li>1/2 cawan / 125g mentega</li>
            </ul>
        </article>
    </section>

    <aside id="ratings">
    <div action="#" method="POST" class= "rating-container">
        <div>
            <div class="criteria">
                <div class="star-rating">
                    <label for="unique-ingredients">Unique Ingredients</label>
                    <div class="stars" data-rating="5">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/whitestar-icon.svg" alt="white star">
                    </div>
                </div>

                <div class="star-rating">
                    <label for="presentation">Presentation</label>
                    <div class="stars" data-rating="5">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/whitestar-icon.svg" alt="white star">
                        <img src="../Images/whitestar-icon.svg" alt="white star">
                    </div>
                </div>

                <div class="star-rating">
                <label for="cleanliness">Cleanliness</label>
                    <div class="stars" data-rating="5">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/whitestar-icon.svg" alt="white star">
                        <img src="../Images/whitestar-icon.svg" alt="white star">
                    </div>
                </div>

                <div class="star-rating">
                <label for="creativity">Creativity</label>
                    <div class="stars" data-rating="5">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/whitestar-icon.svg" alt="white star">
                        <img src="../Images/whitestar-icon.svg" alt="white star">
                    </div>
                </div>

                <div class="star-rating">
                <label for="ambiance">Ambiance</label>
                    <div class="stars" data-rating="5">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/brownstar-icon.svg" alt="brown star">
                        <img src="../Images/whitestar-icon.svg" alt="white star">
                        <img src="../Images/whitestar-icon.svg" alt="white star">
                    </div>
                </div>
            </div>
                
                <!-- Repeat for presentation, cleanliness, etc. -->
           
              
        </div>


    </div>
</aside>

    <div class="actions">
        <div class="cooking-progress-container">
            <label for="cooking-progress">Percentage of cooking</label>
        </div>
        <span class="progress-percentage">70%</span>
        <div class="buttons">
            <a href="../admindashboard2/admindashboard2.php"><button type="submit" class="submit-button">Submit</button></a>
            <button type="button" class="cancel-button">Cancel</button>
        </div>
    </div>  


</main>

</body>
</html>
