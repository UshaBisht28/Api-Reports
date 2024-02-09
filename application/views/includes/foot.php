<script src="<?php echo site_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo site_url(); ?>assets/js/progressbar.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
<script>
    var bar1 = new ProgressBar.Circle(Progresscontainer1, {
      strokeWidth: 6,
      easing: 'easeInOut',
      duration: 1400,
      color: '#ff776a',
      trailColor: '#eee',
      trailWidth: 6,
      svgStyle: null,
      text: {
        autoStyleContainer: false
      },
      step: function(state, circle) {

        var value = Math.round(circle.value() * 100);
        if (value === 0) {
          circle.setText('');
        } else {
          circle.setText(value + "%");
        }

      }
    });
    bar1.animate(0.9);

    var bar2 = new ProgressBar.Circle(Progresscontainer2, {
      strokeWidth: 6,
      easing: 'easeInOut',
      duration: 1400,
      color: '#6441c1',
      trailColor: '#eee',
      trailWidth: 6,
      svgStyle: null,
      text: {
        autoStyleContainer: false
      },
      step: function(state, circle) {

        var value = Math.round(circle.value() * 100);
        if (value === 0) {
          circle.setText('');
        } else {
          circle.setText(value + "%");
        }

      }
    });
    bar2.animate(0.7);

    var bar3 = new ProgressBar.Circle(Progresscontainer3, {
      strokeWidth: 6,
      easing: 'easeInOut',
      duration: 1400,
      color: '#00fff0',
      trailColor: '#eee',
      trailWidth: 6,
      svgStyle: null,
      text: {
        autoStyleContainer: false
      },
      step: function(state, circle) {

        var value = Math.round(circle.value() * 100);
        if (value === 0) {
          circle.setText('');
        } else {
          circle.setText(value + "%");
        }

      }
    });
    bar3.animate(0.9);
  </script>
<script>
  AOS.init({
    once: true
  });
</script>