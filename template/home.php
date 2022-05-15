<?php 
$pageTitle = "Home";
$pageDescrition = "Description";
?>
<header class="header__home">
    <div class="topics">
        <h1>The stars repertory.</h1>
        <h2>All of univer in one website.</h2>
        <form action="" method="get" class="search__bar tiny">
                <input type="text" name="search" class="search_input" placeholder="...">
                <button class="search__button"></button>
        </form>
        <div class="double__button">
            <a href="/" class="button primary">Sign In</a>
            <a href="" class="button secondary">Log Out</a>
        </div>
    </div>
    <div class="stars">
        <img src="/svg/star.svg" class="star star__01">
        <img src="/svg/star.svg" class="star star__02">
        <img src="/svg/star.svg" class="star star__03">
        <img src="/svg/star.svg" class="star star__04">
        <img src="/svg/star.svg" class="star star__05">
        <img src="/svg/star.svg" class="star star__06">
        <img src="/svg/star.svg" class="star star__07">
        <img src="/svg/star.svg" class="star star__08">
    </div>
    <div class="marth">
        <div class="stain__container">
            <div class="stain stain__01"></div>
            <div class="stain stain__02"></div>
            <div class="stain stain__03"></div>
            <div class="stain stain__04"></div>
            <div class="stain stain__05"></div>
            <div class="stain stain__06"></div>
        </div>
    </div>
</header>
<section class="part__01">
        <h1>Latest star :</h1>
        <div class="card__container">
            <?php for ($i=0; $i <= 5 ; $i++): ?>
            <div class="card">
                <div class="card__img"></div>
                <div class="card__infos">
                    <h2>Star Name</h2>
                    <div class="card__tags">
                        <p class="card__tag">tag 01</p>
                        <p class="card__tag">tag 02</p>
                    </div>
                </div>
            </div>    
            <?php endfor ?>
        </div>
    </section>