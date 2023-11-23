
<style>
    @charset "UTF-8";

@import url("https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900");
/*-- Common Style --*/
*, *::after, *::before {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  background-color: #ffffff;
  line-height: 23px;
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  visibility: visible;
  font-family: "Rubik", sans-serif;
  color: #454545;
  position: relative;
}

h1, h2, h3, h4, h5, h6 {
  color: #3a3a3a;
  font-family: "Rubik", sans-serif;
  margin-top: 0;
}

h1 {
  font-size: 48px;
  line-height: 55px;
}

h2 {
  font-size: 36px;
  line-height: 36px;
}

h3 {
  font-size: 24px;
  line-height: 30px;
}
@media (min-width: 1200px)
.h3, h3 {
    position: relative;
    right: 690px;
    top: 7px;
}
h4 {
  font-size: 20px;
  line-height: 28px;
}

h5 {
  font-size: 16px;
  line-height: 20px;
}

h6 {
  font-size: 14px;
  line-height: 18px;
}

@media only screen and (max-width: 767px) {
  h1 {
    font-size: 34px;
    line-height: 42px;
  }
  h1 br {
    display: none;
  }
}
@media only screen and (max-width: 479px) {
  h1 {
    font-size: 26px;
    line-height: 32px;
  }
  h1 br {
    display: none;
  }
}
p {
  font-size: 14px;
}

p:last-child {
  margin-bottom: 0;
}

a, button {
  color: inherit;
  display: inline-block;
  line-height: inherit;
  text-decoration: none;
  cursor: pointer;
}

a:hover {
  color: #c89979;
}

a, button, img, input, span {
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

*:focus {
  outline: none !important;
}

a:focus {
  color: inherit;
  outline: none;
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

button, input[type=submit] {
  cursor: pointer;
}

ul {
  list-style: outside none none;
  margin: 0;
  padding: 0;
}

img {
  max-width: 100%;
}

button:focus,
a:focus {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn, .btn:focus {
  outline: 0;
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
}



.product-large-slider {
  margin-bottom: 20px;
}

.pro-large-img {
  border: 1px solid #ddd;
  margin: 0 1px;
  position: absolute;
  left: 390px;
    margin-top: -61px;
}

/*-------------------------------
   Modal-wrapper css
---------------------------------*/
.modal-wrapper {
  display: block !important;
}

.modal-wrapper .modal-content {
  display: block !important;
}

.modal-wrapper.modal {
  visibility: hidden;
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: -9;
}

.modal-wrapper.modal.show {
  visibility: visible;
  opacity: 1;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  z-index: 100000000000000020000000000;
}

.modal-wrapper .modal-dialog {
  max-width: 880px;
}

.modal-wrapper .modal-body {
  padding: 32px 15px;
}

.modal-wrapper .close {
  color: #333333;
  font-size: 30px;
  font-weight: 400;
  opacity: 1;
  position: absolute;
  right: 15px;
  top: 5px;
  border: none;
  background-color: transparent;
}

/*--
   07. Product Details Css
---------------------------*/
.pro-large-img a {
  z-index: 999;
  position: absolute;
  border: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.3);
  padding: 10px 20px;
  border-radius: 3px;
  color: #ffffff;
  bottom: 0;
}
.pro-large-img a:hover {
  background: #c89979;
}

.product-nav {
  padding: 0 30px;
}
.product-nav .pro-nav-thumb {
  padding: 0 5px;
  border: 1px solid transparent;
  opacity: 0.7;
}
.product-nav .pro-nav-thumb.slick-current {
  border: 1px solid #ddd;
  opacity: 1;
}
.product-nav .slick-arrow {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  left: 0;
  font-size: 18px;
  padding: 0;
  border: none;
  background: transparent;
}
.product-nav .slick-arrow.slick-next {
  right: 0;
  left: auto;
}

@media only screen and (max-width: 767px) {
  .product-details-view-content {
    margin-top: 30px;
  }
}
.product-details-view-content .product-rating li {
  padding-right: 5px;
  font-size: 16px;
}
.product-details-view-content .product-rating li a {
  color: #FECC0A;
}
.product-details-view-content .product-rating > a {
  margin-left: 10px;
}
.product-details-view-content .price-box {
  color: #c89979;
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 15px;
  margin-top: 10px;
  width: 100%;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}
.product-details-view-content .price-box .new-price {
  background: none;
  text-decoration: none;
  color: #c89979;
  font-weight: 500;
  margin-top: 34px;
    margin-left: 42px;
}
.product-details-view-content .price-box .old-price {
  color: #777;
  display: inline-block;
  font-weight: normal;
  margin-left: 4px;
  text-decoration: line-through;
  filter: alpha(opacity=100);
  opacity: 1;
  margin-top: 37px;
    left: 247px;
    position: relative; 
}

.cart-plus-minus {
  margin-right: 15px;
}
.cart-plus-minus input {
  width: 40px;
  height: 40px;
  border: 1px solid #ddd;
  padding: 0 0 0 10px;
  position: relative;
    left: -128px;
    top: 161px;
}


.single-add-to-cart {
  max-width: 190px;
}
.single-add-to-cart .add-to-cart {
  background: #c89979;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 14px;
  font-weight: 400;
  letter-spacing: -0.025em;
  height: 40px;
  line-height: 40px;
  padding: 0 5px;
  text-shadow: none;
  text-align: center;
  border-radius: 3px;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
  width: 100%;
  position: relative;
    left: -132px;
    top: 161px;
}
.single-add-to-cart .add-to-cart:hover {
  background: #333;
}

.single-add-actions {
  margin-top: 20px;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #ddd;
}
.single-add-actions li {
  display: inline-block;
  margin-right: 15px;
  font-size: 16px;
}
.single-add-actions li a i {
  margin-right: 5px;
}

.share-product-socail-area {
  margin-top: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.share-product-socail-area p {
  margin-bottom: 0;
}
.share-product-socail-area li {
  display: inline-block;
  margin-left: 10px;
}
.share-product-socail-area li a {
  height: 30px;
  width: 30px;
  line-height: 30px;
  background: #f1f1f1;
  text-align: center;
  border-radius: 3px;
  color: #333;
}
.share-product-socail-area li a:hover {
  background: #c89979;
  color: #ffffff;
}

.product-description-area {
  border: 1px solid #ddd;
  margin-top: 60px;
  border-radius: 3px;
  padding: 0px 20px 20px 20px;
}

.product-details-tab {
  border-bottom: 1px solid #ddd;
}
.product-details-tab li {
  margin-right: 50px;
}
.product-details-tab li a {
  padding: 20px 0;
  font-size: 20px;
  font-weight: 500;
}
.product-details-tab li a.active {
  color: #c89979;
}
@media only screen and (max-width: 767px) {
  .product-details-tab li a {
    padding: 10px 0;
  }
}

.select-opstion-box .color-select {
  min-width: 280px;
  border: 1px solid #ddd;
  padding: 5px 5px;
}

.single-product-gallery {
  float: left;
  padding: 5px 5px;
  width: 50%;
}
.single-product-gallery a {
  display: block;
  border: 1px solid #ddd;
}

.stock-cont li {
  margin-bottom: 2px;
}
.stock-cont li:last-child {
  margin-bottom: 0px;
}

.pro_review {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
@media only screen and (max-width: 479px) {
  .pro_review {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  .pro_review .review_thumb {
    margin-bottom: 20px;
  }
}

.review_thumb {
  min-width: 62px;
}

.review_details {
  border: 1px solid #ddd;
  margin-left: 26px;
  padding: 10px 20px;
  position: relative;
  border-radius: 3px;
}
@media only screen and (max-width: 479px) {
  .review_details {
    margin-left: 0px;
  }
}
.review_details:before {
  background: #fff;
  border-bottom: 1px solid #ebebeb;
  border-left: 1px solid #ebebeb;
  content: "";
  display: block;
  height: 10px;
  left: -6px;
  position: absolute;
  top: 10px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  width: 10px;
}
.review_details .review_info h5 span {
  font-weight: 300;
}

.product-rating li {
  margin-right: 3px;
  font-size: 16px;
  color: #ffcc00;
}

.comments-reply-area .comment-input input, .comments-reply-area .comment-input textarea, .comments-reply-area .comment-form-comment input, .comments-reply-area .comment-form-comment textarea {
  width: 100%;
  border: 1px solid #ddd;
  padding: 10px;
}
.comments-reply-area .comment-input textarea, .comments-reply-area .comment-form-comment textarea {
  height: 140px;
}
.comments-reply-area label {
  display: block;
  margin-bottom: 3px;
}

.comment-form-submit input {
  border: none;
  padding: 10px 30px;
  border-radius: 3px;
  background: #c89979;
  color: #fff;
}

.product-layout-list .price-box {
  color: #c89979;
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 5px;
  width: 100%;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}

.product-layout-list .price-box .new-price {
  background: none;
  font-size: 1em;
  text-decoration: none;
  color: #c89979;
  font-size: 16px;
  font-weight: 500;
}

.product-layout-list .price-box .old-price {
  color: #777;
  display: inline-block;
  font-size: 0.875em;
  font-weight: normal;
  margin-left: 4px;
  text-decoration: line-through;
  filter: alpha(opacity=100);
  opacity: 1;
}

.stock-cont li span.in-stock {
  color: #c89979;
}

.block2 .product-button-action {
  margin-top: 10px;
}

.block2 .product-button-action .add-to-cart {
  background: #c89979;
  border: none;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  font-weight: 400;
  letter-spacing: -0.025em;
  height: 40px;
  line-height: 40px;
  padding: 0 35px;
  text-shadow: none;
  text-transform: capitalize;
  text-align: center;
  border-radius: 3px;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}

.block2 .product-button-action .add-to-cart:hover {
  background: #333;
  border-color: #3333;
  color: #fff;
}

.block2 .actions {
  margin-top: 10px;
}

.block2 .actions li {
  margin-bottom: 5px;
}

.block2 .actions li a i {
  margin-right: 5px;
}

@media only screen and (max-width: 767px) {
  .block2 {
    margin-top: 20px;
  }
}
/*--
    08. Testimonial Css
--------------------------------*/
.quote-container {
  margin: auto;
  background: #fff;
  border-radius: 7px;
  padding: 60px 30px 25px;
  position: relative;
}
.quote-container .quote-image {
  display: inline-block;
  height: 90px;
  margin-right: 10px;
  overflow: hidden;
  vertical-align: middle;
  width: 90px;
  border: 7px solid #f6f5f1;
  border-radius: 100%;
  position: absolute;
  left: 20px;
  top: -45px;
}
.quote-container .author ul li {
  font-size: 0.9286em;
  margin: 0 0 10px 0;
  display: inline-block;
  position: relative;
  text-align: left;
  vertical-align: middle;
  padding-right: 10px;
  margin-right: 10px;
}
.quote-container .author ul li::after {
  position: absolute;
  left: -15px;
  top: 0;
  content: "/";
  height: 100%;
  width: 100%;
}
.quote-container .author ul li:first-child {
  color: #c89979;
  text-transform: uppercase;
  font-weight: 500;
}
.quote-container .author ul li:first-child::after {
  display: none;
}
.quote-container .author ul li:last-child {
  padding-right: 0px;
  margin-right: 0px;
}

.testimonial-wrap-two {
  padding: 30px;
  background: #fff;
  border-radius: 5px;
}
.testimonial-wrap-two .quote-container {
  padding: 0;
}
.testimonial-wrap-two .quote-container .quote-image {
  margin-right: 0px;
  position: inherit;
  left: 0px;
  top: 0px;
}
.testimonial-wrap-two .quote-container .author {
  margin-top: 25px;
}
.testimonial-wrap-two .quote-container .author h6 {
  font-weight: 500;
  text-transform: uppercase;
  color: #c89979;
}
.testimonial-wrap-two .quote-container .testimonials-text {
  position: relative;
  margin-top: 30px;
}

/*--
    09. Banner Area Css
---------------------------------*/
.single-banner {
  overflow: hidden;
}
.single-banner a {
  display: block;
}
.single-banner a img {
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.single-banner a:hover img {
  -webkit-transform: scale(1.02);
          transform: scale(1.02);
}

/*--
    10. Blog Area Css
----------------------------------*/
.singel-latest-blog .aritcles-content {
  border-top: 1px solid #ebebeb;
  margin-bottom: 30px;
  padding-top: 17px;
}

.singel-latest-blog .author-name {
  color: #222;
  display: block;
  font-size: 12px;
  font-weight: 500;
  margin-bottom: 11px;
  text-transform: capitalize;
}
.singel-latest-blog .author-name a {
  color: #c89979;
}

.singel-latest-blog .articles-name {
  display: block;
  font-size: 14px;
  font-weight: 600;
  line-height: 24px;
  margin-bottom: 15px;
  margin-top: 0;
  position: relative;
  text-transform: uppercase;
}

.singel-latest-blog .articles-image {
  overflow: hidden;
  position: relative;
}

.singel-latest-blog .blog-action {
  border: 1px solid #9d4d4a;
  bottom: 0;
  height: 52px;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: all 300ms ease-in-out 0s;
  transition: all 300ms ease-in-out 0s;
  width: 52px;
  visibility: hidden;
  opacity: 0;
}

.singel-latest-blog .blog-action i {
  background: #9d4d4a none repeat scroll 0 0;
  bottom: 5px;
  color: #ffffff;
  font-family: "simple-line-icons";
  font-size: 23px;
  height: 52px;
  left: 5px;
  line-height: 52px;
  position: absolute;
  text-align: center;
  text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
  width: 52px;
}

.articles-image:hover .blog-action {
  visibility: visible;
  opacity: 1;
}

.articles-image:hover img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

.single-latest-blog .latest-blog-image, .single-blog-wrap .latest-blog-image {
  position: relative;
  overflow: hidden;
  border-radius: 3px;
}
.single-latest-blog .latest-blog-image a, .single-blog-wrap .latest-blog-image a {
  overflow: hidden;
  display: block;
}
.single-latest-blog .latest-blog-image a img, .single-blog-wrap .latest-blog-image a img {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.single-latest-blog .latest-blog-image:hover a img, .single-blog-wrap .latest-blog-image:hover a img {
  -webkit-transform: scale(1.05);
          transform: scale(1.05);
}
.single-latest-blog .latest-blog-content, .single-blog-wrap .latest-blog-content {
  margin-top: 20px;
}
.single-latest-blog .latest-blog-content .post-meta li, .single-blog-wrap .latest-blog-content .post-meta li {
  display: inline-block;
  position: relative;
  padding-left: 20px;
  margin-left: 10px;
  margin-bottom: 10px;
}
.single-latest-blog .latest-blog-content .post-meta li::after, .single-blog-wrap .latest-blog-content .post-meta li::after {
  position: absolute;
  left: 0;
  content: "/";
  top: 0;
}
.single-latest-blog .latest-blog-content .post-meta li:first-child, .single-blog-wrap .latest-blog-content .post-meta li:first-child {
  padding-left: 0px;
  margin-left: 0px;
}
.single-latest-blog .latest-blog-content .post-meta li:first-child::after, .single-blog-wrap .latest-blog-content .post-meta li:first-child::after {
  display: none;
}
.single-latest-blog .latest-blog-content .post-meta li a, .single-blog-wrap .latest-blog-content .post-meta li a {
  color: #c89979;
}
.single-latest-blog .latest-blog-content .post-meta li a:hover, .single-blog-wrap .latest-blog-content .post-meta li a:hover {
  text-decoration: underline;
}
.single-latest-blog .latest-blog-content .blog-read-more a, .single-blog-wrap .latest-blog-content .blog-read-more a {
  margin-top: 5px;
  background: #c89979;
  color: #fff;
  display: inline-block;
  font-size: 14px;
  font-weight: 400;
  letter-spacing: -0.025em;
  height: 40px;
  line-height: 40px;
  border-radius: 3px;
  padding: 0 35px;
  text-align: center;
  -webkit-transition: ease-in-out 0.3s;
  transition: ease-in-out 0.3s;
}
.single-latest-blog .latest-blog-content .blog-read-more a:hover, .single-blog-wrap .latest-blog-content .blog-read-more a:hover {
  background: #c89979;
}

.post-wrapper .latest-blog-list {
  padding: 20px 0;
  padding-top: 20px;
  border-bottom: 1px solid #ebebeb;
}
.post-wrapper .latest-blog-list .post-meta li {
  display: inline-block;
  position: relative;
  padding-left: 20px;
  margin-left: 10px;
  margin-bottom: 10px;
}
.post-wrapper .latest-blog-list .post-meta li::after {
  position: absolute;
  left: 0;
  content: "/";
  top: 0;
}
.post-wrapper .latest-blog-list .post-meta li:first-child {
  padding-left: 0px;
  margin-left: 0px;
}
.post-wrapper .latest-blog-list .post-meta li:first-child::after {
  display: none;
}
.post-wrapper .latest-blog-list .post-meta li a {
  color: #c89979;
}
.post-wrapper .latest-blog-list .post-meta li a:hover {
  text-decoration: underline;
}
.post-wrapper .latest-blog-list:last-child {
  padding-bottom: 0px;
  border-bottom: none;
}

.box-wrap {
  padding: 0 15px 30px 15px;
}

.single-agence {
  position: relative;
  overflow: hidden;
  border-radius: 3px;
}
.single-agence a {
  overflow: hidden;
}
.single-agence a img {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.single-agence:hover a img {
  -webkit-transform: scale(1.06);
          transform: scale(1.06);
}

.agence-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #777;
  padding: 12px 0;
  padding-top: 15px;
  border-bottom: 1px solid #ebebeb;
}
.agence-content:last-child {
  padding-bottom: 0px;
  border-bottom: none;
}
.agence-content p {
  margin-bottom: 0;
}
.agence-content p i {
  color: #c89979;
  font-size: 20px;
}
.agence-content p.dec {
  padding-left: 10px;
}
.agence-content p strong {
  font-weight: 400;
  color: #333333;
}

.single-blog-wrap {
  overflow: hidden;
}
.single-blog-wrap .col-5-custom {
  float: left;
  padding-right: 25px;
  max-width: 45%;
}
@media only screen and (max-width: 767px) {
  .single-blog-wrap .col-5-custom {
    max-width: 100%;
  }
}
.single-blog-wrap .col-7-custom {
  float: left;
  max-width: 55%;
}
.single-blog-wrap .col-7-custom .latest-blog-content {
  margin-top: 0;
}
@media only screen and (max-width: 767px) {
  .single-blog-wrap .col-7-custom {
    max-width: 100%;
  }
}
@media only screen and (max-width: 767px) {
  .single-blog-wrap .latest-blog-content {
    margin-top: 20px;
  }
}
.single-blog-wrap .latest-blog-content .post-meta {
  color: #777;
  padding-bottom: 15px;
  border-bottom: 1px solid #ebebeb;
  margin-bottom: 15px;
}

.post-category-tag {
  position: absolute;
  bottom: 10px;
  left: 10px;
}
.post-category-tag li {
  display: inline-block;
}
.post-category-tag li a {
  background: #fff;
  border-radius: 5px;
  display: block;
  padding: 4px 10px;
}

.meta-sharing {
  border-top: 1px solid #ddd;
  margin-top: 40px;
}

.blockquote-box {
  background: #f6f6f6;
  border: 1px solid #ebebeb;
  border-left-color: #ebebeb;
  border-left-style: solid;
  border-left-width: 1px;
  border-left: 5px solid #c89979;
  font-size: 1em;
  font-style: italic;
  margin: 40px 0 40px 40px;
  padding: 30px 45px;
}

/*--
    11. Footer Css
-------------------------*/
.footer-top {
  background: #2f2f2f;
}

.widget-footer .title-widget {
  margin-bottom: 30px;
  color: #ffffff;
  text-transform: uppercase;
}
.widget-footer p {
  color: #ffffff;
}

.contact-call-wrap, .contact-call-wrap-top {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.contact-call-wrap .footer-call, .contact-call-wrap-top .footer-call {
  margin-left: 15px;
}
.contact-call-wrap .footer-call p, .contact-call-wrap-top .footer-call p {
  color: #ffffff;
  font-size: 1em;
  line-height: 1;
  font-weight: 400;
  margin-bottom: 10px;
}
.contact-call-wrap .footer-call h6, .contact-call-wrap-top .footer-call h6 {
  color: #80bb01;
  font-size: 1.2857em;
  line-height: 1;
}

.contact-call-wrap-top .footer-call {
  margin-left: 15px;
}
.contact-call-wrap-top .footer-call p {
  color: #333;
}

.footer-addres {
  margin-top: 10px;
}
.footer-addres p {
  color: #fff;
  margin-bottom: 0;
}

.social-icons {
  margin-top: 20px;
}
.social-icons li {
  display: inline-block;
  margin: 0 10px 5px 0;
  position: relative;
  vertical-align: middle;
}
.social-icons li a {
  color: #fff;
  display: block;
  font-size: 16px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  width: 30px;
  border-radius: 3px;
}

.newletter-wrap .newsletter-title h3 {
  margin-bottom: 0;
}
.newletter-wrap .newsletter-title h3 span {
  color: #c89979;
}
@media only screen and (max-width: 767px) {
  .newletter-wrap .newsletter-title h3 {
    line-height: 24px;
  }
}
@media only screen and (max-width: 767px) {
  .newletter-wrap .newsletter-title.mb-30 {
    margin-bottom: 15px;
  }
}
.newletter-wrap p {
  color: #ffffff;
  margin-bottom: 0;
}

.newletter-wrap {
  border-top: 1px solid #ccc;
  padding-top: 30px;
}

.newsletter-footer {
  position: relative;
}
.newsletter-footer input {
  background: #f1f1f1;
  border: none;
  color: #888888;
  display: block;
  font-size: 0.929em;
  font-style: italic;
  height: 45px;
  line-height: 45px;
  width: 100%;
  padding: 0 140px 0 20px;
  text-align: left;
  white-space: nowrap;
  border-radius: 3px;
}
.newsletter-footer .subscribe-button {
  width: 100%;
}
.newsletter-footer .subscribe-btn {
  position: absolute;
  top: 0;
  right: 0;
  background: #c89979;
  border: none;
  color: #fff;
  cursor: pointer;
  font-size: 0.8571em;
  height: 45px;
  line-height: 45px;
  margin: 0;
  font-weight: 500;
  padding: 0 30px;
  text-align: center;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
  border-radius: 0 3px 3px 0;
}
.newsletter-footer .subscribe-btn:hover {
  background: #333;
}

.footer-list li {
  margin-bottom: 8px;
  color: #fff;
}
.footer-list li:last-child {
  margin-bottom: 0;
}

.footer-bottom {
  border-top: 1px solid #999;
  background: #2f2f2f;
  padding: 30px 0;
  color: #fff;
}
.footer-bottom .copy-right-image {
  text-align: right;
}
@media only screen and (max-width: 767px) {
  .footer-bottom {
    text-align: center;
  }
  .footer-bottom .copy-left-text {
    margin-bottom: 20px;
  }
  .footer-bottom .copy-right-image {
    text-align: center;
  }
}

/*--
    12. Breadcrumb Style
------------------------------------------*/
.breadcrumb-area {
  background: #F9F9F9;
  padding: 17px 0;
  border: 1px solid #ebebeb;
}

.breadcrumb-list .breadcrumb-item {
  font-size: 14px;
  text-transform: capitalize;
  line-height: 1;
  display: inline-block;
}
.breadcrumb-list .breadcrumb-item.active {
  color: #c89979;
}
.breadcrumb-list .breadcrumb-item a:hover {
  color: #c89979;
}

.breadcrumb-item + .breadcrumb-item::before {
  content: "/";
  display: inline-block;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

/*--
    13. Widget Css
---------------------*/
.shop-box-area, .blog-sidebar-widget-area {
  border: 1px solid #ebebeb;
  border-radius: 3px;
  padding: 20px;
}

.shop-sidebar h4 {
  font-size: 16px;
  font-weight: 500;
  color: #000000;
  margin-bottom: 25px;
  padding-bottom: 15px;
  position: relative;
}
.shop-sidebar h4::before {
  position: absolute;
  content: "";
  background: #ebebeb;
  width: 100%;
  height: 1px;
  left: 0;
  bottom: -1px;
}

.widget-title {
  font-size: 16px;
  font-weight: 500;
  color: #000000;
  margin-bottom: 25px;
  padding-bottom: 15px;
  position: relative;
}
.widget-title::before {
  position: absolute;
  content: "";
  background: #ebebeb;
  width: 100%;
  height: 1px;
  left: 0;
  bottom: -1px;
}

.category-sub-menu ul li.has-sub > a {
  color: #363f4d;
  cursor: pointer;
  display: block;
  font-size: 14px;
  line-height: 14px;
  padding: 10px 0 10px 0px;
  position: relative;
}
.category-sub-menu ul li.has-sub > a:after {
  color: #333333;
  content: "";
  font-family: FontAwesome;
  font-size: 14px;
  position: absolute;
  right: 5px;
}
.category-sub-menu ul li.has-sub > a:hover {
  color: #c89979;
}
.category-sub-menu ul li.has-sub.open {
  display: block;
  width: auto;
}
.category-sub-menu ul li.has-sub.open > a:after {
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}
.category-sub-menu ul li.has-sub li a {
  border: 0 none;
  border-bottom-color: currentcolor;
  border-bottom-style: none;
  border-bottom-width: 0px;
  display: block;
  font-size: 14px;
  line-height: 14pxpx;
  margin: 0 0px 10px 0;
  padding: 0 15px 5px;
  position: relative;
  color: #333;
}
.category-sub-menu ul li.has-sub li a:hover {
  color: #c89979;
}
.category-sub-menu ul li.has-sub li:last-child a {
  border: none;
  margin-bottom: 10px;
}
.category-sub-menu ul li ul {
  display: none;
  margin-top: 10px;
}

.ui-widget-content {
  background: #DBDBDB none repeat scroll 0 0;
  border: medium none;
  border-radius: 5px;
  height: 4px;
  margin: 35px 0 25px;
}
.ui-widget-content .ui-state-default {
  background: #c89979;
  border: 2px solid #ffffff;
  border-radius: 25px;
  -webkit-box-shadow: none;
          box-shadow: none;
  color: #ffffff;
  cursor: pointer;
  font-weight: normal;
  height: 15px;
  width: 15px;
}
.ui-widget-content .ui-state-default:hover {
  background: #c89979;
}
.ui-widget-content .ui-slider-range {
  background: #c89979;
}

.filter-price-cont {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  font-size: 13px;
  margin-bottom: 10px;
}

.filter-price-wapper .add-to-cart-button {
  background: #333;
  display: inline-block;
  font-weight: 500;
  padding: 4px 13px;
  right: 0;
  color: #ffffff;
  border-radius: 5px;
  margin-bottom: 10px;
}
.filter-price-wapper .add-to-cart-button:hover {
  background: #000000;
}

.filter-price-cont {
  font-size: 14px;
}
.filter-price-cont .input-type input {
  border: medium none;
  padding: 0 8px 0 0;
  text-align: center;
  width: 40px;
  background: transparent;
  font-weight: 500;
}
.filter-price-cont .input-type:last-child {
  padding-left: 8px;
}

.category-widget-list li a {
  margin-bottom: 10px;
  position: relative;
  padding: 0 0 0 0px;
  line-height: auto;
}

.sidebar-tag li {
  display: inline-block;
}
.sidebar-tag li > a {
  border: 1px solid #ddd;
  color: #333;
  font-size: 13px;
  margin: 10px 10px 0 0;
  padding: 4px 15px;
  border-radius: 5px;
  text-transform: capitalize;
}
.sidebar-tag li > a:hover {
  background: #c89979;
  color: #ffffff;
  border: 1px solid #c89979;
}

.shop-top-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 10px 15px;
  border: 1px solid #ddd;
  margin-bottom: 10px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 3px;
}

.shop-item-filter-list li a {
  margin-right: 10px;
  font-size: 16px;
}
.shop-item-filter-list li .active {
  color: #c89979;
}

.shop-banner img {
  width: 100%;
}

.product-short {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-size: 14px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.product-short p {
  margin: 0 15px 0 0;
}
@media only screen and (max-width: 479px) {
  .product-short p {
    display: none;
  }
}
.product-short .nice-select {
  border: 1px solid #ddd;
  padding: 0px 15px;
  height: 32px;
  width: 170px;
  line-height: 32px;
  border-radius: 3px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-sidebar-wrap {
    margin-top: 80px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-sidebar-wrap {
    margin-top: 70px;
  }
}
@media only screen and (max-width: 479px) {
  .shop-sidebar-wrap {
    margin-top: 60px;
  }
}

.search-widget .form-input {
  position: relative;
}
.search-widget .form-input input {
  background: #fff;
  height: 40px;
  line-height: 40px;
  outline: none;
  padding: 0 50px 0 15px;
  width: 100%;
  border-radius: 3px;
  border: 1px solid #ebebeb;
}
.search-widget .form-input .button-search {
  background: transparent;
  border: none;
  color: #777;
  cursor: pointer;
  font-size: 18px;
  height: 40px;
  line-height: 40px;
  margin: 0;
  outline: none;
  padding: 0;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 40px;
}
.search-widget .form-input .button-search:hover {
  color: #c89979;
}

.single-widget-post {
  overflow: hidden;
  margin-bottom: 20px;
}
.single-widget-post .post-thumb {
  float: left;
  max-width: 30%;
}
.single-widget-post .post-info {
  float: left;
  padding-left: 20px;
  max-width: 70%;
}
.single-widget-post .post-info .post-date {
  font-size: 13px;
}

/*--
    14. Deals Offer Css
--------------------------------*/
/*--
    15. Brand Css
------------------------*/
.brand-bg {
  background: url(../images/bg/brand-bg.html);
  background-size: cover;
  background-repeat: no-repeat;
}

.brand-group .brand-item {
  padding: 10px 0;
  text-align: center;
  border-bottom: 1px solid #ebebeb;
}
.brand-group .brand-item img {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.brand-group .brand-item:hover img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.brand-group .brand-item:last-child {
  border: none;
}

.our-brand-active .brand-group {
  border-right: 1px solid #ddd;
}
@media only screen and (max-width: 479px) {
  .our-brand-active .brand-group {
    border-right: none;
  }
}
.our-brand-active .brand-group.last-elem {
  border-right: none;
}

.brand-box {
  padding: 30px;
  background: #ffffff;
  border: 1px solid #ddd;
  border-radius: 3px;
}

/*--
    16. About US css
---------------------------*/
.about-welcome-text h2 {
  max-width: 800px;
  margin: auto;
  font-weight: 400;
  line-height: 50px;
}
.about-welcome-text .welcome-dec {
  max-width: 900px;
  margin: 30px auto;
}

.service-bg {
  background: url(../images/bg/about-us-policy-bg.html);
  background-repeat: no-repeat;
  background-size: cover;
}

.panel-heading .panel-title {
  margin-bottom: 0;
}
.panel-heading .panel-title a {
  background: #f5f5f5;
  display: block;
  padding: 14px 20px;
  border-radius: 3px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  color: inherit;
  position: relative;
  -webkit-transition: color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out;
  border: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.panel-heading .panel-title a::before {
  position: absolute;
  content: "";
  font-family: "FontAwesome";
  color: #333;
  font-size: 20px;
  width: 22px;
  height: 22px;
  text-align: center;
  line-height: 25px;
  right: 15px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transition: 0.4s ease-in-out;
  transition: 0.4s ease-in-out;
  border-radius: 100%;
  z-index: 4;
  margin-top: 0px;
}
.panel-heading .panel-title a[aria-expanded=true]::before {
  background: #fff;
  color: #c89979;
}

.faq-style-wrap .panel-title a[aria-expanded=true] {
  border-radius: 3px 3px 0 0;
  color: #ffffff;
  background: #c89979;
}

.panel.panel-default {
  margin-bottom: 15px;
}

.panel-body {
  padding: 15px;
  border: 1px solid #ddd;
}

/*--    
    17. Contact Us Css
-----------------------------*/
.contact-form-info {
  padding: 20px 50px 20px 0;
}
@media only screen and (max-width: 767px), only screen and (min-width: 768px) and (max-width: 991px) {
  .contact-form-info {
    padding: 0;
  }
}

.contact-title > h3 {
  font-size: 22px;
  margin-bottom: 30px;
  font-weight: 600;
}

.contact-input {
  display: block;
  margin: 0 -10px;
  overflow: hidden;
}

.contact-inner {
  float: left;
  margin: 0 0 20px;
  padding: 0 10px;
  width: 50%;
}
@media only screen and (max-width: 767px) {
  .contact-inner {
    width: 100%;
  }
}
.contact-inner input, .contact-inner textarea {
  border: 1px solid #dddddd;
  color: #222222;
  font-size: 14px;
  height: 45px;
  padding-left: 15px;
  width: 100%;
}
.contact-inner.contact-message {
  width: 100%;
}
.contact-inner.contact-message textarea {
  height: 150px;
  padding: 15px;
}

.contact-infor {
  background: #f2f2f2 none repeat scroll 0 0;
  padding: 20px 30px;
}
@media only screen and (max-width: 767px), only screen and (min-width: 768px) and (max-width: 991px) {
  .contact-infor {
    margin-top: 60px;
  }
}

.contact-dec > p {
  margin-bottom: 30px;
}

.contact-address {
  margin-bottom: 10px;
}
.contact-address li {
  border-top: 1px solid #e4e4e4;
  font-size: 14px;
  padding: 10px 0;
}
.contact-address li:first-child {
  border-top: none;
}
.contact-address li i {
  margin-right: 5px;
}

.work-hours {
  margin-bottom: 15px;
}

.contact-submit-btn .submit-btn {
  background: #333333 none repeat scroll 0 0;
  border: 0 none;
  border-radius: 3px;
  color: #ffffff;
  cursor: pointer;
  display: inline-block;
  font-size: 14px;
  font-weight: 400;
  height: 40px;
  line-height: 40px;
  padding: 0 25px;
  text-transform: capitalize;
  -webkit-transition: all 0.4s ease-out 0s;
  transition: all 0.4s ease-out 0s;
}
.contact-submit-btn .submit-btn:hover {
  background: #c89979;
}

.form-messege {
  margin-bottom: 0;
  margin-top: 3px;
  font-size: 14px;
}
.form-messege.error {
  color: red;
  font-style: italic;
}
.form-messege.success {
  color: #008000;
  font-style: italic;
}

/*--
    18. Cart Page Css
-----------------------------*/
.table-content table {
  background: #ffffff none repeat scroll 0 0;
  border-color: #ebebeb;
  border-radius: 0;
  border-style: solid;
  border-width: 1px 0 0 1px;
  margin-bottom: 0;
  text-align: center;
  width: 100%;
  text-align: center;
}
.table-content table td {
  border-top: medium none;
  font-size: 16px;
  padding: 20px 10px;
  vertical-align: middle;
  min-width: 140px;
}
.table-content th, .table-content td {
  border-bottom: 1px solid #ebebeb;
  border-right: 1px solid #ebebeb;
}

.plantmore-product-quantity > input {
  text-align: center;
  width: 48px;
}

.cart-table .coupon-all {
  margin-top: 50px;
}
.cart-table .coupon-all .coupon h3 {
  color: #000000;
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  margin-top: -8px;
}
.cart-table .coupon-all .coupon input {
  border: 1px solid #999999;
  font-size: 14px;
  margin-right: 10px;
  padding: 6px 10px;
  width: 130px;
}
.cart-table .coupon-all .coupon input.button {
  background: #000000;
  border: 0 none;
  color: #ffffff;
  cursor: pointer;
  display: inline-block;
  font-size: 12px;
  font-weight: 600;
  height: 36px;
  letter-spacing: 1px;
  line-height: 36px;
  padding: 0 14px;
  text-transform: uppercase;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  width: inherit;
}
.cart-table .coupon-all .coupon input.button:hover {
  background: #c89979;
}
@media only screen and (max-width: 767px) {
  .cart-table .coupon-all .coupon input.button {
    margin-top: 20px;
  }
}
@media only screen and (max-width: 479px) {
  .cart-table .coupon-all .coupon input {
    width: 125px;
  }
}
.cart-table .coupon-all .coupon2 {
  margin-bottom: 40px;
}
.cart-table .coupon-all .coupon2 input {
  margin-right: 8px;
}
.cart-table .coupon-all .coupon2 input.submit {
  padding: 8px 15px;
  background: #000000;
  color: #ffffff;
  border: 1px solid #000000;
}
.cart-table .coupon-all .coupon2 input.submit:hover {
  background: #c89979;
  border: 1px solid #c89979;
}
.cart-table .coupon-all .coupon2 .continue-btn {
  padding: 9px 15px;
  background: #000000;
  color: #fff;
}
.cart-table .coupon-all .coupon2 .continue-btn:hover {
  background: #c89979;
  color: #fff;
}
@media only screen and (max-width: 767px) {
  .cart-table .coupon-all .coupon2 .continue-btn {
    margin-top: 20px;
  }
}

.cart-page-total {
  margin-top: 40px;
}
.cart-page-total h2 {
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 16px;
  text-transform: capitalize;
}
.cart-page-total ul {
  border: 1px solid #dddddd;
}
.cart-page-total ul li {
  border-bottom: 1px solid #ebebeb;
  color: #252525;
  font-family: "Montserrat", sans-serif;
  font-size: 15px;
  font-weight: 700;
  list-style: outside none none;
  padding: 10px 30px;
}
.cart-page-total ul li:last-child {
  border: none;
}
.cart-page-total ul li span {
  float: right;
}
.cart-page-total .proceed-checkout-btn {
  background: #000000;
  color: #ffffff;
  display: inline-block;
  margin-top: 30px;
  padding: 8px 16px;
  text-transform: capitalize;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.cart-page-total .proceed-checkout-btn:hover {
  background: #c89979;
}

.plantmore-product-add-cart > a {
  background: #000000;
  color: #ffffff;
  font-size: 14px;
  font-weight: 500;
  padding: 6px 30px;
  text-transform: capitalize;
  -webkit-transform: 0.4s;
  transform: 0.4s;
}
.plantmore-product-add-cart > a:hover {
  background: #c89979;
}

.in-stock {
  color: #30b878;
}

.out-stock {
  color: #A80135;
}

/*-- 
   19. Checkout Page Css
------------------------------*/
.coupon-accordion h3 {
  background: #f6f6f6;
  border-top: 3px solid #c89979;
  color: #515151;
  font-size: 14px;
  font-weight: 400;
  margin: 0 0 30px;
  padding: 1em 2em 1em 3.5em;
  position: relative;
  text-transform: capitalize;
}
.coupon-accordion h3 .coupon {
  color: #c89979;
  cursor: pointer;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.coupon-accordion h3 .coupon:hover {
  color: #000000;
}

.coupon-content {
  border: 1px solid #dddddd;
  margin-bottom: 30px;
  padding: 20px;
  display: none;
}

.coupon-info p.form-row-first {
  float: left;
  width: 48%;
}
@media only screen and (max-width: 479px) {
  .coupon-info p.form-row-first {
    width: 100%;
  }
}
.coupon-info p.form-row-last {
  float: right;
  width: 48%;
}
@media only screen and (max-width: 479px) {
  .coupon-info p.form-row-last {
    width: 100%;
  }
}
.coupon-info .remember {
  margin-left: 10px;
}
.coupon-info .remember span {
  margin-left: 5px;
}

.coupon-input label {
  display: block;
  font-size: 14px;
}
.coupon-input input {
  border: 1px solid #999999;
  color: #000000;
  padding: 5px 10px;
  width: 100%;
  font-size: 14px;
}
.coupon-input span.required {
  color: red;
}

.checkout-coupon input {
  border: 1px solid #999999;
  color: #555;
  padding: 5px 10px;
  width: auto;
}
.checkout-coupon input:focus {
  outline: none;
}
.checkout-coupon .button-apply-coupon {
  margin: -5px 0 0 10px;
  padding: 7.2px 11px;
}
@media only screen and (max-width: 479px) {
  .checkout-coupon .button-apply-coupon {
    margin: 10px 0 0 0px;
  }
}

.shoping-checkboxt-title {
  border-bottom: 1px solid #dddddd;
  font-size: 24px;
  font-weight: 500;
  margin-bottom: 30px;
  padding-bottom: 15px;
}

.single-form-row {
  margin-bottom: 20px !important;
}
.single-form-row label {
  font-size: 14px;
  margin-bottom: 2px;
}
.single-form-row label span.required {
  color: red;
}
.single-form-row input {
  border: 1px solid #999999;
  color: #666;
  font-size: 14px;
  padding: 5px 12px;
  width: 100%;
}
.single-form-row input::focus {
  outline: none;
}
.single-form-row textarea {
  border: 1px solid #999999;
  color: #555555;
  padding: 12px;
  width: 100%;
  font-size: 14px;
}
.single-form-row.m-0 {
  margin: 0 !important;
}

.checkout-box-wrap p {
  font-size: 14px;
}
.checkout-box-wrap .ship-box-info {
  display: none;
}

.account-create {
  display: none;
}
.account-create .creat-pass > span {
  color: red;
}

.nice-select select {
  height: 35px;
  width: 100%;
  font-size: 14px;
  padding: 0 10px;
  color: #555;
  border: 1px solid #999;
}

@media only screen and (max-width: 767px) {
  .your-order-wrapper {
    margin-top: 70px;
  }
}
@media only screen and (max-width: 479px) {
  .your-order-wrapper {
    margin-top: 60px;
  }
}

.your-order-wrap {
  background: #f6f6f6;
}

.your-order-table {
  padding: 20px 30px;
}
.your-order-table table {
  width: 100%;
}
.your-order-table table th, .your-order-table table td {
  border-bottom: 1px solid #d8d8d8;
  border-right: medium none;
  font-size: 14px;
  padding: 15px 0;
  text-align: center;
}
.your-order-table table th {
  border-top: medium none;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  vertical-align: middle;
  white-space: nowrap;
  width: 250px;
}
.your-order-table table .shipping > th {
  vertical-align: top;
}

.payment-method {
  padding: 20px 30px;
}

.payment-accordion h3 a {
  color: #333333;
  font-size: 15px;
  font-weight: 500;
  padding-left: 31px;
  position: relative;
  text-decoration: none;
  text-transform: capitalize;
}
.payment-accordion h3 a::before, .payment-accordion h3 a::after {
  content: "";
  display: inline-block;
  font-family: ionicons;
  font-size: 19px;
  left: 0;
  position: absolute;
  top: 0px;
}
.payment-accordion h3 a img {
  height: 60px;
  display: block;
}
.payment-accordion h3.open a::after {
  content: "";
}
.payment-accordion p {
  font-size: 14px;
  padding-left: 20px;
}

.order-button-payment {
  margin-top: 30px;
}
.order-button-payment input {
  background: #c89979;
  border: medium none;
  color: #ffffff;
  font-size: 14px;
  font-weight: 600;
  padding: 12px;
  text-transform: uppercase;
  width: 100%;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.order-button-payment input:hover {
  background: #000000;
  color: #ffffff;
}

/*--    
    20. Error 404 Page Css
---------------------------*/
.search-error-wrapper h1 {
  color: #c89979;
  font-size: 120px;
  line-height: 86px;
  margin-bottom: 60px;
}
@media only screen and (max-width: 767px) {
  .search-error-wrapper h1 {
    font-size: 70px;
    line-height: 50px;
    margin-bottom: 40px;
  }
}

.error-form-input {
  position: relative;
  width: 275px;
  margin: 30px auto;
}
.error-form-input input {
  border: 1px solid #dddddd;
  font-size: 15px;
  padding: 5px 45px 6px 10px;
  position: relative;
  width: 275px;
  border-radius: 35px;
}
.error-form-input .error-s-button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 7px 15px;
  position: absolute;
  right: 0;
  top: 0;
}

.search-error-wrapper .home-bacck-button {
  background: #c89979;
  border-radius: 35px;
  -webkit-box-shadow: none;
          box-shadow: none;
  color: #ffffff;
  display: inline-block;
  font-size: 12px;
  font-weight: bold;
  height: 40px;
  line-height: 40px;
  padding: 0 30px;
  text-transform: uppercase;
  -webkit-transition: 0.4;
  transition: 0.4;
}

/*--
    21. Compare Page Css
-----------------------------------------*/
.compare-table .table tbody tr:first-child {
  border-top: 1px solid #eeeeee;
}
.compare-table .table tbody tr td {
  text-align: center;
  border: none;
  padding: 25px 30px;
  vertical-align: middle;
  border-bottom: 1px solid #eeeeee;
  border-left: 1px solid #eeeeee;
}
.compare-table .table tbody tr td:last-child {
  border-right: 1px solid #eeeeee;
}
.compare-table .table tbody tr td.first-column {
  min-width: 180px;
  font-size: 18px;
  font-weight: 600;
  color: #000000;
  margin: 0;
  line-height: 1;
}
.compare-table .table tbody tr td.product-image-title {
  min-width: 310px;
  vertical-align: bottom;
  padding-top: 70px;
}
.compare-table .table tbody tr td.product-image-title .image {
  clear: both;
  width: 100%;
  margin-bottom: 40px;
}
.compare-table .table tbody tr td.product-image-title .image img {
  max-width: 100%;
}
.compare-table .table tbody tr td.product-image-title .category {
  clear: both;
  color: #454545;
  float: left;
  font-size: 13px;
  letter-spacing: 0.5px;
  line-height: 15px;
  margin-bottom: 7px;
  margin-top: 15px;
  text-transform: capitalize;
}
.compare-table .table tbody tr td.product-image-title .title {
  float: left;
  clear: both;
  font-size: 16px;
  font-weight: 600;
  color: #000000;
  line-height: 20px;
  margin-bottom: 10px;
}
.compare-table .table tbody tr td.pro-desc p {
  text-align: left;
  margin: 0;
}
.compare-table .table tbody tr td.pro-price {
  font-size: 16px;
  font-weight: 600;
  color: #000000;
}
.compare-table .table tbody tr td.pro-color {
  font-size: 16px;
  font-weight: 600;
  color: #000000;
}
.compare-table .table tbody tr td.pro-stock {
  font-size: 16px;
  font-weight: 600;
  color: #000000;
}
.compare-table .table tbody tr td.pro-addtocart .add-to-cart {
  position: relative;
  background-color: #f6f6f6;
  color: #000000;
  border-radius: 50px;
  display: inline-block;
  width: 170px;
  padding: 10px 6px;
  -webkit-transition: all 0.7s;
  transition: all 0.7s;
}
.compare-table .table tbody tr td.pro-addtocart .add-to-cart span {
  font-size: 13px;
  text-transform: uppercase;
  font-weight: 700;
  line-height: 21px;
  overflow: hidden;
  display: block;
  text-align: center;
}
.compare-table .table tbody tr td.pro-remove button {
  border: none;
  background-color: transparent;
  padding: 0;
}
.compare-table .table tbody tr td.pro-remove button i {
  font-size: 20px;
}
.compare-table .table tbody tr td.pro-ratting i {
  color: #000000;
  font-size: 14px;
}

/*--
    22. My Account Page Css
--------------------------*/
.dashboard-upper-info [class*=col-]:not(:last-child) .d-single-info {
  border-right: 1px solid #ebebeb;
  padding: 30px 20px;
}
.dashboard-upper-info [class*=col-]:not(:last-child) .d-single-info p {
  margin-bottom: 0;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .dashboard-upper-info [class*=col-]:not(:last-child) .d-single-info {
    border-right: medium none;
    padding: 0 0 20px;
  }
}
@media only screen and (max-width: 767px) {
  .dashboard-upper-info [class*=col-]:not(:last-child) .d-single-info {
    border-right: medium none;
    padding: 0 0 20px;
  }
}

.dashboard-upper-info {
  border-bottom: 1px solid #ebebeb;
  border-top: 1px solid #ebebeb;
  margin-bottom: 60px;
}
.dashboard-upper-info a.view-cart {
  background: #c89979;
  color: #ffffff;
  font-size: 14px;
  padding: 5px 12px;
  text-transform: capitalize;
}
.dashboard-upper-info a.view-cart:hover {
  background: #000000;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .dashboard-upper-info {
    border-bottom: medium none;
    border-top: medium none;
  }
}
@media only screen and (max-width: 767px) {
  .dashboard-upper-info {
    border-bottom: medium none;
    border-top: medium none;
  }
}

.user-name span {
  color: #303030;
  font-size: 16px;
  font-weight: 600;
}

.dashboard-list li a {
  border-bottom: 1px solid #ebebeb;
  color: #222222;
  display: block;
  font-size: 14px;
  padding: 12px 0;
  text-transform: capitalize;
}
.dashboard-list li:first-child {
  border-top: 1px solid #ebebeb;
}

.dashboard-content {
  border: 1px solid #ebebeb;
  padding: 30px;
}
.dashboard-content h3 {
  border-bottom: 1px solid #ebebeb;
  font-size: 20px;
  font-weight: 600;
  line-height: 24px;
  margin-bottom: 25px;
  padding-bottom: 15px;
  text-transform: capitalize;
}
.dashboard-content .table thead {
  background: #f6f6f6 none repeat scroll 0 0;
  border-bottom: 1px solid #ebebeb;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .dashboard-content .table td {
    min-width: 260px;
  }
}
@media only screen and (max-width: 767px) {
  .dashboard-content .table td {
    min-width: 260px;
  }
}
.dashboard-content .view {
  background: #c89979;
  color: #ffffff;
  font-size: 14px;
  padding: 5px 12px;
  text-transform: capitalize;
}
.dashboard-content .view:hover {
  background: #000000;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .dashboard-content {
    margin-top: 80px;
  }
}
@media only screen and (max-width: 767px) {
  .dashboard-content {
    margin-top: 60px;
  }
}

.billing-address {
  margin-bottom: 10px;
}

.biller-name {
  margin-bottom: 0;
  margin-top: 10px;
}

.account-login-form .custom-checkbox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.account-login-form input[type=checkbox] {
  height: 20px;
  margin: 0 10px 0 0;
  position: relative;
  top: 3px;
  width: auto;
}
.account-login-form .example {
  margin-bottom: 15px;
}
.account-login-form .default-btn {
  margin-top: 15px;
  padding: 6px 28px;
}

.account-input-box label {
  display: block;
  font-size: 15px;
  margin-bottom: 3px;
}
.account-input-box input {
  width: 100%;
  margin-bottom: 12px;
  border: 1px solid #ddd;
  padding: 4px 10px;
  font-size: 15px;
}

/*--
    23. Login And Register Css
----------------------------------*/
.login-register-tab-list {
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-bottom: 40px;
}
.login-register-tab-list a {
  position: relative;
}
.login-register-tab-list a::before {
  background-color: #454545;
  bottom: 5px;
  content: "";
  height: 18px;
  margin: 0 auto;
  position: absolute;
  right: -2px;
  top: 3px;
  -webkit-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
  width: 1px;
}
.login-register-tab-list a:last-child:before {
  display: none;
}
.login-register-tab-list a.active h4, .login-register-tab-list a:hover h4 {
  color: #c89979;
}
.login-register-tab-list a h4 {
  font-size: 25px;
  font-weight: 700;
  margin: 0 20px;
  text-transform: capitalize;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.login-input-box input {
  border: 1px solid #999999;
  color: #666666;
  margin-bottom: 20px;
  padding: 8px 12px;
  width: 100%;
  font-size: 14px;
}

.login-toggle-btn a {
  float: right;
  color: red;
  font-size: 14px;
}
@media only screen and (max-width: 479px) {
  .login-toggle-btn a {
    float: inherit;
  }
}
.login-toggle-btn input {
  margin-right: 5px;
}

.login-form-container {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  -webkit-box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
  padding: 60px;
  text-align: left;
}
@media only screen and (max-width: 479px) {
  .login-form-container {
    padding: 30px;
  }
}
.login-form-container .login-btn, .login-form-container .register-btn {
  margin-top: 20px;
  padding: 8px 30px;
}

.pro-large-img {
  width:300px;
  position: absolute;
  left:56px;
  margin-top:30px;
}
div.row.product-details-inner {
    width: 50%;
    border-radius:20px;
    height:500px;
    margin:0 auto;
}

.mota {
  width:50%;
}
</style>
      <?php
      extract($sp);
      $image = $img_path . $img;
      ?>   
      <h1 style="font-family:san-serif;text-align:center;">chi tiết sản phẩm</h1>                 
    <div class="row product-details-inner">
                    <div class="col-lg-5 col-md-6">
                        <!-- Product Details Left -->
                        <div class="product-large-slider">
                            <div class="pro-large-img img-zoom">
                               <?php
                               echo "<img src='$image' width='300'/>";
                               ?>
                            <i class="fa fa-search"></i></a>
                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="product-details-view-content">
                            <div class="product-info">
                                <h3 style="text-align:center">
                                    <?php echo $name; ?>
                                </h3>
                                <div class="price-box">
                                    <span class="new-price" style="position:absolute;left:750px;">
                                    giá mới: 
                                        <?php echo $giamoi; ?>
                                    </span>
                                    <span class="old-price" style="position:absolute;left:930px">
                                    giá cũ:
                                    <?php echo $giacu; ?>
                                    </span>
                                </div>  
                                <div class="mota">
                                <p style="margin-top:10px;"><?php echo $mota; ?></p>
                                </div>
                                <div class="single-add-to-cart">
                                    <form action="" class="cart-quantity d-flex">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input type="number" style="width:50px;height:39px;;" class="input-text" name="quantity" value="1" title="Qty">
                                            </div>
                                        </div>
                                        <button class="add-to-cart" type="submit">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
