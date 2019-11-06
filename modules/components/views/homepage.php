<header class="header" id="header">

    <div class="header__logo-box">
        <img class="header__logo" src="<?= BASE_URL ?>image/logo-white.png" alt="uber-logo">
    </div>

    <div class="header__text-box">

        <h1 class="heading-primary">
            <span class="heading-primary--main">Outdoors</span>
            <span class="heading-primary--sub">is where life happens</span>
        </h1>

        <a href="#section-tours" class="btn btn--white btn--animated"> Discover our tours</a>

    </div>
        

</header>

<main>
    <section class="section-about" id="section-about">

        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Exciting tours for adventurous people
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-2">
                <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with nature</h3>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa saepe similique nesciunt aliquam facere quis impedit fugiat, soluta animi. 
                </p>

                <h3 class="heading-tertiary u-margin-bottom-small">Live adventures like you never have before</h3>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa saepe similique nesciunt aliquam facere quis impedit fugiat, soluta animi.
                </p>

                <a href="#" class="btn-text">Learn more &rarr;</a>
            </div>

            <div class="col-1-of-2">
                <div class="composition">

                    <img srcset="<?= BASE_URL ?>image/nat-1.jpg 300w, 
                                 <?= BASE_URL ?>image/nat-1-large.jpg 1000w" 
                         sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" 
                         alt="Photo 1" 
                         class="composition__photo composition__photo--p1" 
                         src="<?= BASE_URL ?>image/nat-1-large.jpg">

                    <img srcset="<?= BASE_URL ?>image/nat-2.jpg 300w, 
                                 <?= BASE_URL ?>image/nat-2-large.jpg 1000w" 
                         sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" 
                         alt="Photo 2" 
                         class="composition__photo composition__photo--p2" 
                         src="<?= BASE_URL ?>image/nat-2-large.jpg">

                    <img srcset="<?= BASE_URL ?>image/nat-3.jpg 300w, 
                                 <?= BASE_URL ?>image/nat-3-large.jpg 1000w" 
                         sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" 
                         alt="Photo 3" 
                         class="composition__photo composition__photo--p3" 
                         src="<?= BASE_URL ?>image/nat-3-large.jpg">

                    <!--                     
                    <img src="<?= BASE_URL ?>image/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                    <img src="<?= BASE_URL ?>image/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                    <img src="<?= BASE_URL ?>image/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3"> 
                    -->

                </div>
            </div>
        </div>

    </section>

    <section class="section-features" id="section-features">

        <div class="row">

            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-world"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                    <p class="feature-box__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ad explicabo aspernatur?</p>
                </div>
            </div>
            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-compass"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                    <p class="feature-box__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ad explicabo aspernatur?</p>
                </div>
            </div>
            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-map"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                    <p class="feature-box__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ad explicabo aspernatur?</p>
                </div>
            </div>
            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-heart"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                    <p class="feature-box__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ad explicabo aspernatur?</p>
                </div>
            </div>

        </div>

    </section>

    <section class="section-tours" id="section-tours">
        
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Most popular tours
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--1">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--1">the sea explorer</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>3 day tour</li>
                                <li>Up to 30 people</li>
                                <li>2 tour guides</li>
                                <li>Sleep in cozy hotels</li>
                                <li>Difficulty: easy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$297</p>
                            </div>
                            <a href="#popup" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--2">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--2">the forest hiker</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>7 day tour</li>
                                <li>Up to 40 people</li>
                                <li>6 tour guides</li>
                                <li>Sleep in provided tents</li>
                                <li>Difficulty: medium</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-2">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$497</p>
                            </div>
                            <a href="#popup" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--3">
                            &nbsp;
                        </div>
                        <h4 class="card__heading">
                            <span class="card__heading-span card__heading-span--3">the snow adventurer</span>
                        </h4>
                        <div class="card__details">
                            <ul>
                                <li>5 day tour</li>
                                <li>Up to 15 people</li>
                                <li>3 tour guides</li>
                                <li>Sleep in provided tents</li>
                                <li>Difficulty: hard</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-3">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$897</p>
                            </div>
                            <a href="#popup" class="btn btn--white">Book now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="u-center-text u-margin-top-huge">
            <a href="#" class="btn btn--green">Discover all tours</a>
        </div>

    </section>

    <section class="section-stories" id="section-stories">
        
        <div class="bg-video">
            <video class="bg-video__content" autoplay muted loop>
                <source src="<?= BASE_URL ?>image/video.mp4" type="video/mp4">
                <source src="<?= BASE_URL ?>image/video.webm" type="video/webm">
                Your browser is not supported!
            </video>
        </div>

        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                We make people genuinely happy
            </h2>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="<?= BASE_URL ?>image/nat-8.jpg" alt="person on a tour" class="story__img">
                    <figcaption class="story__caption">Mary Smith</figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        I had the best week ever with my family
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae! Lorem ipsum dolor sit amet, consectetur adipisicing. </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="story">
                <figure class="story__shape">
                    <img src="<?= BASE_URL ?>image/nat-9.jpg" alt="person on a tour" class="story__img">
                    <figcaption class="story__caption">Jack Wilson</figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        WOW! My life is completely different now.
                    </h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt dolor cum accusantium eveniet repellendus iusto sequi reprehenderit autem ullam, tempore? Eveniet quos, dolorem! Illo aut ea ut temporibus vitae! Lorem ipsum dolor sit amet, consectetur adipisicing. </p>
                </div>
            </div>
        </div>

        <div class="u-center-text u-margin-top-huge">
            <a href="#" class="btn-text">Read all stories &rarr;</a>
        </div>

    </section>

    <section class="section-book" id="section-book">
        <div class="row">
            <div class="book">
                <div class="book__form">
                    <form action="#" class="form">
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary form__heading">
                                Start booking now
                            </h2>
                        </div>

                        <div class="form__group">
                            <input type="text" class="form__input" placeholder="Full name" id="name" required>
                            <label for="name" class="form__label">Full name</label>
                        </div>

                        <div class="form__group">
                            <input type="email" class="form__input" placeholder="Email address" id="email" required>
                            <label for="email" class="form__label">Email address</label>
                        </div>

                        <div class="form__group">
                            <div class="form__radio-group">
                                <input type="radio" class="form__radio-input" id="small" name="size">
                                <label for="small" class="form__radio-label">
                                    <span class="form__radio-button"></span>
                                    Small tour group
                                </label>
                            </div>

                            <div class="form__radio-group">
                                <input type="radio" class="form__radio-input" id="large" name="size">
                                <label for="large" class="form__radio-label">
                                    <span class="form__radio-button"></span>
                                    Large tour group
                                </label>
                            </div>
                        </div>
                        
                        <div class="u-margin-top-medium">
                            <button href="" class="btn btn--green">Next step &rarr;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="popup" id="popup">
<a href="#section-tours" class="popup__closeall">&zwnj;</a>
    <div class="popup__content">
        <div class="popup__left">
            <img src="<?= BASE_URL ?>image/nat-8.jpg" alt="Tour Photo" class="popup__img">
            <img src="<?= BASE_URL ?>image/nat-9.jpg" alt="Tour Photo" class="popup__img">
        </div>
        <div class="popup__right">
        
        <a href="#section-tours" class="popup__close">&times;</a>
            <h2 class="heading-secondary u-margin-bottom-small">Start booking now!</h2>
            <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking</h3>
            <p class="popup__text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis natus quaerat dicta rem unde similique assumenda commodi at dolorem, doloribus autem eum necessitatibus asperiores ipsum deserunt distinctio nisi suscipit laboriosam sint, illo iste saepe. Cupiditate ipsam mollitia, consequatur explicabo, ea, minima officiis ad ipsum hic totam quisquam! Suscipit possimus ratione corrupti consequuntur, praesentium porro tenetur saepe maiores? Iure id temporibus odit exercitationem fuga eos culpa voluptates magni esse odio, fugit eligendi beatae dignissimos, nulla suscipit expedita, debitis quasi quod?
            </p>
            <a href="#" class="btn btn--green popup__button">Book now</a>
        </div>
    </div>
</div>


<!-- 
<section class="grid-test">

    <div class="row">
        <div class="col-1-of-2">
            Col 1 of 2
        </div>
        <div class="col-1-of-2">
            Col 1 of 2
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-3">
            Col 1 of 3
        </div>
        <div class="col-2-of-3">
            Col 2 of 3
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-2-of-4">
            Col 2 of 4
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-4">
            Col 1 of 4
        </div>
        <div class="col-3-of-4">
            Col 3 of 4
        </div>
    </div>

</section> 
-->