const sidebar = document.querySelector('.sidebar');
const invi = document.querySelector('.invi-div');
const toggleBtn = document.querySelector('.toggle-btn');

toggleBtn.addEventListener('click', ()=>{
    sidebar.classList.toggle('active');
    invi.classList.toggle('active');
});

function getImagePreview(event)
{
  var image=URL.createObjectURL(event.target.files[0]);
  var imagediv= document.getElementById('preview');
  var newimg=document.createElement('img');
  imagediv.innerHTML='';
  newimg.src=image;
  imagediv.appendChild(newimg);
}

  // JavaScript to trigger search while typing
  document.getElementById('search').addEventListener('input', function() {
    // Get the search query from the input field
    let searchQuery = this.value.trim().toLowerCase();
    
    // Get all rows in the table body
    let rows = document.querySelectorAll('tbody tr');

    // Iterate over each row and check if it matches the search query
    rows.forEach(row => {
        // Get the data in each row
        let rowData = row.textContent.toLowerCase();

        // Show or hide the row based on whether it matches the search query
        if (rowData.includes(searchQuery)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});