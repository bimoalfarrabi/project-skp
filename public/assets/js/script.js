
// tombolTambah.innerHTML = 'widura';

// const form = document.querySelector('#inputan');
// const formBaru = form.innerHTML = `<input type="text" placeholder="Indikator">`;

// form.append(formBaru);
const inputGroup = document.getElementById('indikator_keberhasilan');
const tombolTambah = document.getElementById('tambah');
const tombolKurang = document.getElementById('kurang');

tombolTambah.onclick = function(){
  const newField = document.createElement('input');
  newField.setAttribute('type', 'text');
  newField.setAttribute('name', 'indikator_keberhasilan');
  newField.setAttribute('class', 'form-control');
  newField.setAttribute('placeholder', 'indikator keberhasilan');
  inputGroup.append(newField);
}

tombolKurang.onclick = function(){
  const input_tags = inputGroup.getElementsByTagName('input');
  if(input_tags.length > 2){
    inputGroup.removeChild(input_tags[(input_tags.length) - 1]);
  }
}