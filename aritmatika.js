// Fungsi Aritmatika
function tambah(a, b) {
  return a + b;
}

function kurang(a, b) {
  return a - b;
}

function kali(a, b) {
  return a * b;
}

function bagi(a, b) {
  if (b === 0) {
    return "Tidak bisa dibagi dengan 0";
  }
  return a / b;
}

// Contoh penggunaan
let angka1 = 10;
let angka2 = 5;

console.log("Angka 1:", angka1);
console.log("Angka 2:", angka2);

console.log("Penjumlahan:", tambah(angka1, angka2));
console.log("Pengurangan:", kurang(angka1, angka2));
console.log("Perkalian:", kali(angka1, angka2));
console.log("Pembagian:", bagi(angka1, angka2));
