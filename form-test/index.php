<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Heuristic Evaluation Form</title>

    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <!-- Database structure:

      | id | user_id | prototype_id | form_results |

      note: 'prototype_id' is appended to form.

  -->
    <!-- <form class="" name="form_heuristic_evaluation" action="form_handler.php" method="post" enctype="application/x-www-form-urlencoded"> -->
    <form class="" name="form_heuristic_evaluation" action="form_handler.php" method="post" enctype="application/x-www-form-urlencoded">

      <!-- hidden form attributes to store user and session data -->
      <input type="hidden" name="user_id" value="69420"/>
      <input type="hidden" name="prototype_id" value="1337"/>


      <h1>Heuristic Evaluation Form</h1>
      <p>(This is a JS --> PHP --> SQL Form Test for the Requestor App. Check out the project's GitHub Repo <a href="https://ajgeel.github.io/requestor/">here</a>.)</p>

      <div class="form-section">
        <h2>#1: Visibility of System Status</h2>
        <p>The system should always keep users informed about what is going on, through appropriate feedback within reasonable time.</p>
        <div class="radio-button-group">
          <div class="">
            <label for="heu_1_c0">0</label>
            <input type="radio" id="heu_1_c0" name="heu_1" value="0">
          </div>

          <div class="">
            <label for="heu_1_c1">1</label>
            <input type="radio" id="heu_1_c1" name="heu_1" value="1">
          </div>

          <div class="">
            <label for="heu_1_c2">2</label>
            <input type="radio" id="heu_1_c2" name="heu_1" value="2">
          </div>

          <div class="">
            <label for="heu_1_c3">3</label>
            <input type="radio" id="heu_1_c3" name="heu_1" value="3">
          </div>

          <div class="">
            <label for="heu_1_c4">4</label>
            <input type="radio" id="heu_1_c4" name="heu_1" value="4">
          </div>
        </div>

        <h3>Issue(s) <span>(Please be specific)</span></h3>
        <textarea name="heu_1_issue" rows="4"></textarea>

        <h3>Recommendation(s)</h3>
        <textarea name="heu_1_recommendation" rows="3"></textarea>
      </div>

      <div class="form-section">
        <h2>#2: Match between the system and the real world</h2>
        <p>The system should speak the users' language, with words, phrases and concepts familiar to the user, rather than system-oriented terms. Follow real-world conventions, making information appear in a natural and logical order.</p>
        <div class="radio-button-group">
          <div class="">
            <label for="heu_2_c0">0</label>
            <input type="radio" id="heu_2_c0" name="heu_2" value="0">
          </div>

          <div class="">
            <label for="heu_2_c1">1</label>
            <input type="radio" id="heu_2_c1" name="heu_2" value="1">
          </div>

          <div class="">
            <label for="heu_2_c2">2</label>
            <input type="radio" id="heu_2_c2" name="heu_2" value="2">
          </div>

          <div class="">
            <label for="heu_2_c3">3</label>
            <input type="radio" id="heu_2_c3" name="heu_2" value="3">
          </div>

          <div class="">
            <label for="heu_2_c4">4</label>
            <input type="radio" id="heu_2_c4" name="heu_2" value="4">
          </div>
        </div>

        <h3>Issue(s) <span>(Please be specific)</span></h3>
        <textarea name="heu_2_issue" rows="4"></textarea>

        <h3>Recommendation(s)</h3>
        <textarea name="heu_2_recommendation" rows="3"></textarea>
      </div>

      <!-- fadjksfadklsfj l;asdkfj as;ldfkj as;dfkjF;LKj;lkjf;l kJ;LFKj;lkj l;faksj ;ladksj fal;ksdjf ;klasdjf;lkjF;LKSAJDF;KLJAS ;LDKFJA;L KJDSF;LAKSDJF;AKLSDFJA;LKSDFJAL;SDKFJAL;KDSJFL;-->

      <div class="form-section">
        <h2>#3: User control and freedom</h2>
        <p>Users often choose system functions by mistake and will need a clearly marked "emergency exit" to leave the unwanted state without having to go through an extended dialogue. Support undo and redo.</p>
        <div class="radio-button-group">
          <div class="">
            <label for="heu_3_c0">0</label>
            <input type="radio" id="heu_3_c0" name="heu_3" value="0">
          </div>

          <div class="">
            <label for="heu_3_c1">1</label>
            <input type="radio" id="heu_3_c1" name="heu_3" value="1">
          </div>

          <div class="">
            <label for="heu_3_c2">2</label>
            <input type="radio" id="heu_3_c2" name="heu_3" value="2">
          </div>

          <div class="">
            <label for="heu_3_c3">3</label>
            <input type="radio" id="heu_3_c3" name="heu_3" value="3">
          </div>

          <div class="">
            <label for="heu_3_c4">4</label>
            <input type="radio" id="heu_3_c4" name="heu_3" value="4">
          </div>
        </div>

        <h3>Issue(s) <span>(Please be specific)</span></h3>
        <textarea name="heu_3_issue" rows="4"></textarea>

        <h3>Recommendation(s)</h3>
        <textarea name="heu_3_recommendation" rows="3"></textarea>
      </div>

      <div class="form-section">
        <h2>#4: Consistency and standards</h2>
        <p>Users should not have to wonder whether different words, situations, or actions mean the same thing. Follow platform conventions.</p>
        <div class="radio-button-group">
          <div class="">
            <label for="heu_4_c0">0</label>
            <input type="radio" id="heu_4_c0" name="heu_4" value="0">
          </div>

          <div class="">
            <label for="heu_4_c1">1</label>
            <input type="radio" id="heu_4_c1" name="heu_4" value="1">
          </div>

          <div class="">
            <label for="heu_4_c2">2</label>
            <input type="radio" id="heu_4_c2" name="heu_4" value="2">
          </div>

          <div class="">
            <label for="heu_4_c3">3</label>
            <input type="radio" id="heu_4_c3" name="heu_4" value="3">
          </div>

          <div class="">
            <label for="heu_4_c4">4</label>
            <input type="radio" id="heu_4_c4" name="heu_4" value="4">
          </div>
        </div>

        <h3>Issue(s) <span>(Please be specific)</span></h3>
        <textarea name="heu_4_issue" rows="4"></textarea>

        <h3>Recommendation(s)</h3>
        <textarea name="heu_4_recommendation" rows="3"></textarea>
      </div>

      <div class="form-section">
        <h2>#5: Error Prevention</h2>
        <p>Even better than good error messages is a careful design which prevents a problem from occurring in the first place. Either eliminate error-prone conditions or check for them and present users with a confirmation option before they commit to the action.</p>
        <div class="radio-button-group">
          <div class="">
            <label for="heu_5_c0">0</label>
            <input type="radio" id="heu_5_c0" name="heu_5" value="0">
          </div>

          <div class="">
            <label for="heu_5_c1">1</label>
            <input type="radio" id="heu_5_c1" name="heu_5" value="1">
          </div>

          <div class="">
            <label for="heu_5_c2">2</label>
            <input type="radio" id="heu_5_c2" name="heu_5" value="2">
          </div>

          <div class="">
            <label for="heu_5_c3">3</label>
            <input type="radio" id="heu_5_c3" name="heu_5" value="3">
          </div>

          <div class="">
            <label for="heu_5_c4">4</label>
            <input type="radio" id="heu_5_c4" name="heu_5" value="4">
          </div>
        </div>

        <h3>Issue(s) <span>(Please be specific)</span></h3>
        <textarea name="heu_5_issue" rows="4"></textarea>

        <h3>Recommendation(s)</h3>
        <textarea name="heu_5_recommendation" rows="3"></textarea>
      </div>

      <div class="form-section">
        <h2>#6: Recognition rather than recall</h2>
        <p>Minimize the user's memory load by making objects, actions, and options visible. The user should not have to remember information from one part of the dialogue to another. Instructions for use of the system should be visible or easily retrievable whenever appropriate.</p>
        <div class="radio-button-group">
          <div class="">
            <label for="heu_6_c0">0</label>
            <input type="radio" id="heu_6_c0" name="heu_6" value="0">
          </div>

          <div class="">
            <label for="heu_6_c1">1</label>
            <input type="radio" id="heu_6_c1" name="heu_6" value="1">
          </div>

          <div class="">
            <label for="heu_6_c2">2</label>
            <input type="radio" id="heu_6_c2" name="heu_6" value="2">
          </div>

          <div class="">
            <label for="heu_6_c3">3</label>
            <input type="radio" id="heu_6_c3" name="heu_6" value="3">
          </div>

          <div class="">
            <label for="heu_6_c4">4</label>
            <input type="radio" id="heu_6_c4" name="heu_6" value="4">
          </div>
        </div>

        <h3>Issue(s) <span>(Please be specific)</span></h3>
        <textarea name="heu_6_issue" rows="4"></textarea>

        <h3>Recommendation(s)</h3>
        <textarea name="heu_6_recommendation" rows="3"></textarea>
      </div>

      <div class="form-section">
        <h2>#7: Flexibility and efficiency of use</h2>
        <p>Accelerators — unseen by the novice user — may often speed up the interaction for the expert user such that the system can cater to both inexperienced and experienced users. Allow users to tailor frequent actions.</p>
        <div class="radio-button-group">
          <div class="">
            <label for="heu_7_c0">0</label>
            <input type="radio" id="heu_7_c0" name="heu_7" value="0">
          </div>

          <div class="">
            <label for="heu_7_c1">1</label>
            <input type="radio" id="heu_7_c1" name="heu_7" value="1">
          </div>

          <div class="">
            <label for="heu_7_c2">2</label>
            <input type="radio" id="heu_7_c2" name="heu_7" value="2">
          </div>

          <div class="">
            <label for="heu_7_c3">3</label>
            <input type="radio" id="heu_7_c3" name="heu_7" value="3">
          </div>

          <div class="">
            <label for="heu_7_c4">4</label>
            <input type="radio" id="heu_7_c4" name="heu_7" value="4">
          </div>
        </div>

        <h3>Issue(s) <span>(Please be specific)</span></h3>
        <textarea name="heu_7_issue" rows="4"></textarea>

        <h3>Recommendation(s)</h3>
        <textarea name="heu_7_recommendation" rows="3"></textarea>
      </div>

      <div class="form-section">
        <h2>#8: Aesthetic and minimalist design</h2>
        <p>Dialogues should not contain information which is irrelevant or rarely needed. Every extra unit of information in a dialogue competes with the relevant units of information and diminishes their relative visibility.</p>
        <div class="radio-button-group">
          <div class="">
            <label for="heu_8_c0">0</label>
            <input type="radio" id="heu_8_c0" name="heu_8" value="0">
          </div>

          <div class="">
            <label for="heu_8_c1">1</label>
            <input type="radio" id="heu_8_c1" name="heu_8" value="1">
          </div>

          <div class="">
            <label for="heu_8_c2">2</label>
            <input type="radio" id="heu_8_c2" name="heu_8" value="2">
          </div>

          <div class="">
            <label for="heu_8_c3">3</label>
            <input type="radio" id="heu_8_c3" name="heu_8" value="3">
          </div>

          <div class="">
            <label for="heu_8_c4">4</label>
            <input type="radio" id="heu_8_c4" name="heu_8" value="4">
          </div>
        </div>

        <h3>Issue(s) <span>(Please be specific)</span></h3>
        <textarea name="heu_8_issue" rows="4"></textarea>

        <h3>Recommendation(s)</h3>
        <textarea name="heu_8_recommendation" rows="3"></textarea>
      </div>

      <div class="form-section">
        <h2>#9: Help users recognize, diagnose, and recover from errors</h2>
        <p>Error messages should be expressed in plain language (no codes), precisely indicate the problem, and constructively suggest a solution.</p>
        <div class="radio-button-group">
          <div class="">
            <label for="heu_9_c0">0</label>
            <input type="radio" id="heu_9_c0" name="heu_9" value="0">
          </div>

          <div class="">
            <label for="heu_9_c1">1</label>
            <input type="radio" id="heu_9_c1" name="heu_9" value="1">
          </div>

          <div class="">
            <label for="heu_9_c2">2</label>
            <input type="radio" id="heu_9_c2" name="heu_9" value="2">
          </div>

          <div class="">
            <label for="heu_9_c3">3</label>
            <input type="radio" id="heu_9_c3" name="heu_9" value="3">
          </div>

          <div class="">
            <label for="heu_9_c4">4</label>
            <input type="radio" id="heu_9_c4" name="heu_9" value="4">
          </div>
        </div>

        <h3>Issue(s) <span>(Please be specific)</span></h3>
        <textarea name="heu_9_issue" rows="4"></textarea>

        <h3>Recommendation(s)</h3>
        <textarea name="heu_9_recommendation" rows="3"></textarea>
      </div>

      <div class="form-section">
        <h2>#10: Help and documentation</h2>
        <p>Even though it is better if the system can be used without documentation, it may be necessary to provide help and documentation. Any such information should be easy to search, focused on the user's task, list concrete steps to be carried out, and not be too large.</p>
        <div class="radio-button-group">
          <div class="">
            <label for="heu_10_c0">0</label>
            <input type="radio" id="heu_10_c0" name="heu_10" value="0">
          </div>

          <div class="">
            <label for="heu_10_c1">1</label>
            <input type="radio" id="heu_10_c1" name="heu_10" value="1">
          </div>

          <div class="">
            <label for="heu_10_c2">2</label>
            <input type="radio" id="heu_10_c2" name="heu_10" value="2">
          </div>

          <div class="">
            <label for="heu_10_c3">3</label>
            <input type="radio" id="heu_10_c3" name="heu_10" value="3">
          </div>

          <div class="">
            <label for="heu_10_c4">4</label>
            <input type="radio" id="heu_10_c4" name="heu_10" value="4">
          </div>
        </div>

        <h3>Issue(s) <span>(Please be specific)</span></h3>
        <textarea name="heu_10_issue" rows="4"></textarea>

        <h3>Recommendation(s)</h3>
        <textarea name="heu_10_recommendation" rows="3"></textarea>
      </div>

      <div class="form-section">
        <h2>One More Thing</h2>
        <p>Well done, you've reached the end of this evaluation. On behalf of Arthur Geel, the requestor, we thank you very much for your efforts! Here's one last question:</p>

        <h3>What was your general impression of the design you've just seen? <span>(You can be as specific as you want)</span></h3>
        <textarea name="general_impression" rows="4"></textarea>

      </div>


      <input type="submit" value="submit the form">

    </form>

    <?php

    // include 'display-data.php';

    ?>

    <script src="app.js" charset="utf-8"></script>

  </body>
</html>
