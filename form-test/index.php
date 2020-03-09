<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>
      html {
        font-family: "IBM Plex Mono", monospace;
      }

      form {
        width: 800px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
      }

      .radio-button-group {
        border: 1px solid teal;
        padding: 1em;
        width: auto;
        display: flex;
        justify-content: space-between;
        margin-bottom: 2em;
      }

      .radio-button-group div {
        border: 1px solid teal;
        padding: 1em;
      }

      h2 {
        margin: 0;
      }

      h3 {
        font-weight: normal;
      }

      input[type=radio] {
      }

      input[type=submit] {
        border: 0;
        border-radius: 0.25rem;
        background: transparent;
        border: 1px solid teal;
        color: teal;
        font-family: "IBM Plex Mono", monospace;
        font-size: 1.5rem;
        line-height: 1.2;
        white-space: nowrap;
        text-decoration: none;
        padding: 0.50rem 0.5rem;
        margin: 0.25rem;
        cursor: pointer;

        transition: background-color .2s ease-in-out, color .2s ease-in-out;
      }

      input[type=submit]:hover, input[type=submit]:focus {
        background-color: teal;
        color: white;
      }

      table {
        margin: 0 auto;
        border: 1px solid teal;
        padding: 2em;
      }

      table tr {
        border: none;
      }

      table tr:nth-child(2n) {
        background-color: rgba(0, 128, 128, .3);
      }

      table tr:hover {
        /* background-color: teal; */
      }

    </style>
  </head>
  <body>

    <!-- Database structure:

      | id | user_id | prototype_id | form_results |

      note: 'prototype_id' is appended to form.

  -->
    <form class="" id="1337" action="form_handler.php" method="post">

      <h1>AJAX / PHP / SQL Form Test</h1>

      <h2>Heuristic One</h2>
      <h3>Kickstarter 90's hoodie everyday carry crucifix yuccie. Lo-fi you probably haven't heard of them raw denim jianbing. Kale chips pork belly cardigan selvage raclette quinoa slow-carb roof party cteal.</h3>
      <div class="radio-button-group">
        <div class="">
          <label for="h1_c0">0</label>
          <input type="radio" id="h1_c0" name="heuristic_1" value="0">
        </div>

        <div class="">
          <label for="h1_c1">1</label>
          <input type="radio" id="h1_c1" name="heuristic_1" value="1">
        </div>

        <div class="">
          <label for="h1_c2">2</label>
          <input type="radio" id="h1_c2" name="heuristic_1" value="2">
        </div>

        <div class="">
          <label for="h1_c3">3</label>
          <input type="radio" id="h1_c3" name="heuristic_1" value="3">
        </div>

        <div class="">
          <label for="h1_c4">4</label>
          <input type="radio" id="h1_c4" name="heuristic_1" value="4">
        </div>
      </div>

      <h2>Heuristic Two</h2>
      <h3> typewriter vice. Farm-to-table pickled yr, godard food truck offal butcher kale chips DIY biodiesel 3 wolf moon enamel pin. Shabby chic hexagon hella, you probably haven't heard of them brooklyn kombucha blog la croix pabst farm-to-table gochujang. Vice synth skateboard church-key lo-fi. 3 wolf moon bushwick literally quinoa.</h3>
      <div class="radio-button-group">
        <div class="">
          <label for="h2_c0">0</label>
          <input type="radio" id="h2_c0" name="heuristic_2" value="0">
        </div>

        <div class="">
          <label for="h2_c1">1</label>
          <input type="radio" id="h2_c1" name="heuristic_2" value="1">
        </div>

        <div class="">
          <label for="h2_c2">2</label>
          <input type="radio" id="h2_c2" name="heuristic_2" value="2">
        </div>

        <div class="">
          <label for="h2_c3">3</label>
          <input type="radio" id="h2_c3" name="heuristic_2" value="3">
        </div>

        <div class="">
          <label for="h2_c4">4</label>
          <input type="radio" id="h2_c4" name="heuristic_2" value="4">
        </div>
      </div>


      <input type="submit" value="submit the form">

    </form>

    <?php

    include 'display-data.php';

    ?>

    <script src="app.js" charset="utf-8"></script>

  </body>
</html>
