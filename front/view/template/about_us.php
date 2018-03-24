<section id="about-us" class="parallax">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2><?= $textProvider->get('ME'); ?></h2>
          <?= $textProvider->get('MY_HISTORY', array('age' => $data['age'])); ?>
        </div>
      </div>
      <div class="col-sm-6">
        <img src="https://scontent.faep9-1.fna.fbcdn.net/v/t1.0-9/27857759_10213978954400834_4571560441853578338_n.jpg?_nc_cat=0&oh=03ab1d8593f604f65100061eb432e4d8&oe=5B2F6CA1">
      </div>
    </div>
  </div>
</section><!--/#about-us-->