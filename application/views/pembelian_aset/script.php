<script type="text/javascript">
    var harga_aset = document.getElementById("harga_aset");
    var biaya = document.getElementById("biaya");

    harga_aset.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      harga_aset.value = formatRupiah(this.value);
    });

    biaya.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      biaya.value = formatRupiah(this.value);
    });

    // var harga_pokok_edit = document.getElementById("harga_pokok_edit");
    // var harga_jual_edit = document.getElementById("harga_jual_edit");
    // var harga_grosir_edit = document.getElementById("harga_grosir_edit");

    // harga_pokok_edit.addEventListener("keyup", function(e) {
    //   // tambahkan 'Rp.' pada saat form di ketik
    //   // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    //   harga_pokok_edit.value = formatRupiah(this.value);
    // });

    // harga_jual_edit.addEventListener("keyup", function(e) {
    //   // tambahkan 'Rp.' pada saat form di ketik
    //   // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    //   harga_jual_edit.value = formatRupiah(this.value);
    // });

    // harga_grosir_edit.addEventListener("keyup", function(e) {
    //   // tambahkan 'Rp.' pada saat form di ketik
    //   // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    //   harga_grosir_edit.value = formatRupiah(this.value);
    // });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
      var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        console.log(number_string)

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
      return prefix == undefined ? rupiah : rupiah ? rupiah : "";
}
</script>