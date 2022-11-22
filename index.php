<?php include('header.php');
?>

    <main>
        <section id="aboutUs">

            <article>
            <h1> Who We Are?</h1>
            <h2>I am MAX</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis quidem veniam ipsam voluptatem inventore rem harum vel odio esse at vitae, earum odit sed dolores recusandae labore repellat ex consectetur.</p>
            <p>Id pariatur cupiditate eos? Ipsam suscipit fugit est nobis earum asperiores, maiores, consectetur error ad ipsa sequi, aliquid ex atque modi! Possimus sint tempora, repellendus quos eum exercitationem libero nihil!</p>
            </article>
        <div>
            <article>
            <h3>Simple</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, fugit eius veritatis recusandae corporis nihil quis reiciendis excepturi quo, a voluptatem fuga cum esse distinctio vitae officia, assumenda sint quia.</p>
            </article>
            <article>
            <h3>Approachable</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, fugit eius veritatis recusandae corporis nihil quis reiciendis excepturi quo, a voluptatem fuga cum esse distinctio vitae officia, assumenda sint quia.</p>
            </article>
            <article>
            <h3>Effective</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, fugit eius veritatis recusandae corporis nihil quis reiciendis excepturi quo, a voluptatem fuga cum esse distinctio vitae officia, assumenda sint quia.</p>
            </article>
         </div>
         </section>          
            
       

        <section id="skinQuiz">
            <h2>What Is Your Skin Type?</h2>
            <div>
            <button class="big_btn btn-16" id="skinQuiz_btn">Take a Quiz</button>
            </div>
             <!-- skin type quiz and create a cookie to store skin type-->  
        </section>
<!-- Ask dan how to do it use button to switch back / show next contant -->
        <section id="question" class="hidden">
          
            <a href=""><img src="" alt=""></a>
            <button id="close_Btn" class="closeBtn"><i class="fa-solid fa-xmark"></i></button>
            <h2>What Is Your Skin Type?</h2>
            <p>It’s something you probably do every day, but are you actually maintaining your skin properly? </p>
            <form action="">
            <fieldset id="question_1" class="hidden">
            <legend>Q1.What do you wash your face with? </legend>
            <input type="radio" name="Q1" id="a" value="1"><label for="a">Body wash </label>
            <input type="radio" name="Q1" id="b" value="2"><label for="b">Soap bar</label>
            <input type="radio" name="Q1" id="c" value="3"><label for="c">Water </label>
            <input type="radio" name="Q1" id="d" value="4"><label for="d">Face cleanse</label>
            </fieldset>
            
            <fieldset id="question_2" class="hidden">
            <legend>Q2.After washing your face, how does it feel? </legend>
            <input type="radio" name="Q2" id="q2_a" value="1"><label for="q2_a">Irritated and sensitive </label>
            <input type="radio" name="Q2" id="q2_d" value="2"><label for="q2_b">Tight and dry</label>
            <input type="radio" name="Q2" id="q2_c" value="3"><label for="q2_c">Feels like nothing </label>
            <input type="radio" name="Q2" id="q2_d" value="4"><label for="q2_d">Greasy </label>
            </fieldset>

            <fieldset id="question_2" class="hidden">
            <legend>Q3. At the end of the day, does your skin feel like?</legend>
            <input type="radio" name="Q2" id="q2_a" value="1"><label for="q2_a">It needs moisture</label>
            <input type="radio" name="Q2" id="q2_d" value="2"><label for="q2_b">It greasy (shiny) and needs a wipe </label>
            <input type="radio" name="Q2" id="q2_c" value="3"><label for="q2_c">Nothing, its fine  </label>
            <input type="radio" name="Q2" id="q2_d" value="4"><label for="q2_d">Redness and some breakouts</label>
            </fieldset>

            <fieldset id="question_2" class="hidden">
            <legend>Q4.Do you get acne often?</legend>
            <input type="radio" name="Q2" id="q2_a" value="1"><label for="q2_a">No </label>
            <input type="radio" name="Q2" id="q2_d" value="2"><label for="q2_b">Once a while</label>
            <input type="radio" name="Q2" id="q2_c" value="3"><label for="q2_c">Somtimes</label>
            <input type="radio" name="Q2" id="q2_d" value="4"><label for="q2_d">Yes</label>
            </fieldset>

            <button class="big_btn" id="back_btn">Back</button>
            <button class="big_btn" id="next_btn">Next</button>
            </form>


        </section>


       
    </main>
    <?php include('footer.php');
?>
