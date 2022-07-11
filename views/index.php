<div class="about-container container-sm section">
  <div class="about">
    <h2 class="tx-start title">About title...</h2>
    <div class="about-text-container">
      <div class="text-column">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum aperiam distinctio sapiente quam laudantium id dolore, inventore repellendus velit, tempore labore tempora ipsa nostrum qui praesentium iusto vitae hic unde.</p>
      </div>
      <div class="text-column">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum aperiam distinctio sapiente quam laudantium id dolore, inventore repellendus velit, tempore labore tempora ipsa nostrum qui praesentium iusto vitae hic unde.</p>
      </div>
    </div>
  </div>
</div>

<section class="about-images section">
  <div class="img-container"></div>
  <div class="info-container">
    <div class="info-content">
      <h2>About subtitle...</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, veniam.</p>
      <a href="#">Link</a>
    </div>
  </div>
  <div class="carrousel-container">
    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="slide__content about-person-container">
              <img src="build/img/person1.webp" alt="person1">
              <div class="about-person person1">
                <h3>Person1</h3>
                <p>Sub title</p>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="slide__content about-person-container">
              <img src="build/img/person2.webp" alt="person2">
              <div class="about-person person2">
                <h3>Person2</h3>
                <p>Sub title</p>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="slide__content about-person-container">
              <img src="build/img/person3.webp" alt="person3">
              <div class="about-person person3">
                <h3>Person3</h3>
                <p>Sub title</p>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="slide__content about-person-container">
              <img src="build/img/person4.webp" alt="person4">
              <div class="about-person person4">
                <h3>Person4</h3>
                <p>Sub title</p>
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="slide__content about-person-container">
              <img src="build/img/person5.webp" alt="person5">
              <div class="about-person person5">
                <h3>Person5</h3>
                <p>Sub title</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          < </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"> > </button>
      </div>
    </div>
  </div>
</section>

<?php

$script = '
<!-- Glide.js -->
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="build/js/customCarrousel.js"></script>
'

?>