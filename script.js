document.querySelector('form').addEventListener('submit', async (e) => {
  e.preventDefault();
  const formData = new FormData(e.target);

  const response = await fetch('upload.php', {
    method: 'POST',
    body: formData,
  });

  const result = await response.text();
  alert(result);

  fetchGallery();
});

async function fetchGallery() {
  const response = await fetch('fetch_gallery.php');
  const galleryHTML = await response.text();
  document.querySelector('.gallery').innerHTML = galleryHTML;
}
