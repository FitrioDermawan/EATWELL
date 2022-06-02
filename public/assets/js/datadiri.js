document.getElementById('calorie-form').addEventListener('submit', function(e){
    document.getElementById('results').style.display = 'none';

    setTimeout(calculateCaloriesNeeded, 10);
  });

  function calculateCaloriesNeeded(e) {

    const jeniskelamin = document.querySelector('input[name="jeniskelamin"]:checked');
    const umur = document.getElementById('umur');
    const berat = document.getElementById('berat');
    const tinggi = document.getElementById('tinggi');
    const totalCalories = document.getElementById('totalcalories');


    // if (umur.value === '' || berat.value === '' || tinggi.value === '' || 80 < umur.value || umur.value < 15) {
    //     errorMessumur('Please make sure the values you entered are correct')
    if(jeniskelamin.id === 'M') {
      totalCalories.value = Math.round(1.2 * (66.5 + (13.75 * parseFloat(berat.value)) + (5.003 * parseFloat(tinggi.value)) - (6.755 * parseFloat(umur.value))));
    }
     else if(jeniskelamin.id === 'F') {
      totalCalories.value = Math.round(1.2 * (655 + (9.563 * parseFloat(berat.value)) + (1.850 * parseFloat(tinggi.value)) - (4.676 * parseFloat(umur.value))));
    }
     else {
      totalCalories.value = Math.round(1.9 * (655 + (9.563 * parseFloat(berat.value)) + (1.850 * parseFloat(tinggi)) - (4.676 * parseFloat(umur.value))));
    }

    document.getElementById('results').style.display = 'block';
  }

