function uygula() {
         metin = $('input[name="metin"]').val();
         $.get('ceviri.php', {yazi: metin}, function (gelen_cevap) {
            $('.cevap').html(gelen_cevap);
            
            
         });
      }