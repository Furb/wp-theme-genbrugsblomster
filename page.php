<?php get_header(); ?>
<div class="bg_ramme">
      <div class="container">
        <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="overskrift">
          <?php the_title(); ?>
        </h1>
    


        
        <div class="info_boks">
          <div class="info_boks-tekst">
            <p>
              Lorem ipsum dolor sit up amet consectetur adipisicing elit. Rerum
              ea dicta quos aperiam ullam odit voluptatum quia, commodi vel,
              alias maiores at reiciendis dolorem aliquid numquam placeat
              molestiae dolorum provident?
            </p>
            <button>
              <h4>Button</h4>
            </button>
          </div>
          <div class="info_boks-billede">
            <img src="http://genbrugsplanterdk.local/wp-content/uploads/2024/12/planter_wild.svg" alt="placeholder_image" />
          </div>
        </div>
        <div class="info_boks">
          <div class="info_boks-billede">
            <img src="assets/images/asset 15.jpeg" alt="placeholder_image" />
          </div>
          <div class="info_boks-tekst">
            <p>
              Lorem ipsum dolor sit up amet consectetur adipisicing elit. Rerum
              ea dicta quos aperiam ullam odit voluptatum quia, commodi vel,
              alias maiores at reiciendis dolorem aliquid numquam placeat
              molestiae dolorum provident?
            </p>
            <button class="bg_eucalyptus">
              <h4>Button</h4>
            </button>
          </div>
        </div>
        <div class="sektion_boks bg_orkide">
          <h2>Hej. Secondhand planter er fantastiske pga. deres CO2-aftryk.</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
            harum autem quam error dolore. Voluptates rem corrupti laborum
            aliquid voluptate asperiores inventore qui quibusdam! Corporis
            veritatis nostrum facilis accusamus reprehenderit.
          </p>
        </div>
        <p class="bold"></p>
        <div class="testimonial bg_monstera">
          <img
            class="bg_orkide"
            src="assets/images/testimonial__profil_1.svg"
            alt="Navn på vedkommende"
          />
          <blockquote>
            <p class="testimonial_text color_orkide">
              "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis
              laboriosam impedit dolores porro, quis iusto libero ipsum,
              perferendis at repellendus temporibus similique sunt molestias
              animi voluptate, quaerat voluptas aut ullam?"
            </p>
            <p class="testimonial_author color_orkide">Sofie Rendel</p>
            <p class="testimonial_job color_orkide">ReThink</p>
          </blockquote>
        </div>
            <?php endwhile; ?>
<?php endif; ?>
      </div>
      <!-- Container slut-->
    </div>
    <?php get_footer(); ?>