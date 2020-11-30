<template>
  <div class="app">
    <v-sheet color="grey lighten-3" height="150">
      <v-container py-8>
        <a class="slogan-3">Product Detail</a>
        <br />
        <a class="title-shoes">Home / Product Detail</a>
      </v-container>
    </v-sheet>
    <v-container>
      <div
        id="carousel-thumb"
        class="carousel slide carousel-fade carousel-thumbnails"
        data-ride="carousel"
      >
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img
              class="d-block w-100"
              src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg"
              alt="First slide"
            />
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg"
              alt="Second slide"
            />
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg"
              alt="Third slide"
            />
          </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a
          class="carousel-control-prev"
          href="#carousel-thumb"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carousel-thumb"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-thumb" data-slide-to="0" class="active">
            <img
              class="d-block w-100 img-fluid"
              src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg"
            />
          </li>

          <li data-target="#carousel-thumb" data-slide-to="1">
            <img
              class="d-block w-100 img-fluid"
              src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg"
            />
          </li>

          <li data-target="#carousel-thumb" data-slide-to="2">
            <img class="d-block w-100 img-fluid"
            src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg"
            >
          </li>
        </ol>
      </div>
    </v-container>
  </div>
</template>

<script>
// import ImageView from "../../components/Customer/ProductImage";
export default {
  // components: { ImageView },
};
</script>

<style></style>
