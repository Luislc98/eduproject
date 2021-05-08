
// Toggle indicators around element for re-sizing
$('body').on("click", function (){
  if (show == false){
    $(".indicators").removeClass('show')
  }
  show = false
});

$('#resize').on('click', function(){
  show = true
  $(".indicators").addClass('show');
});


//re-size an element

function resizeElement(div) {
  const element = document.querySelector(div);
  const resizers = document.querySelectorAll(div + ' .square-resizer')
  const minimum_size = 20;
  let original_width = 0;
  let original_height = 0;
  let original_x = 0;
  let original_y = 0;
  let original_mouse_x = 0;
  let original_mouse_y = 0;
  for (let i = 0;i < resizers.length; i++) {
    const currentResizer = resizers[i];
    currentResizer.addEventListener('mousedown', function(e) {
      e.preventDefault()
      e.preventDefault()
      original_width = parseFloat(getComputedStyle(element, null).getPropertyValue('width').replace('px', ''));
      original_height = parseFloat(getComputedStyle(element, null).getPropertyValue('height').replace('px', ''));
      original_x = element.getBoundingClientRect().left;
      original_y = element.getBoundingClientRect().top;
      original_mouse_x = e.pageX;
      original_mouse_y = e.pageY;
      window.addEventListener('mousemove', resize)
      window.addEventListener('mouseup', stopResize)
    })
    
    function resize(e) {
      if (currentResizer.classList.contains('middle-right')) {
        element.style.width = e.pageX - element.getBoundingClientRect().left + 'px';
      }
  //remember to resize to the left, you need to calculate 
  //new width = old width - (mouseX - elementX)
  //then, we need to also make sure the element moves to the left
  // with the added width (since browsers don't calculate to the left)
  // The same for top calculations! as browsers calculate to the bottom
      else if (currentResizer.classList.contains('middle-left')) {
        element.style.width = original_width - (e.pageX - original_mouse_x)  + 'px'
        element.style.left = original_x + (e.pageX - original_mouse_x) + 'px'
      }

      else if (currentResizer.classList.contains('middle-top')) {
        const height = original_height - (e.pageY - original_mouse_y);
        if (height > minimum_size) {
          element.style.height = height + 'px'
          element.style.top = original_y + (e.pageY - original_mouse_y) + 'px'
        }
      }

      else if (currentResizer.classList.contains('middle-bottom')) {
        const height = original_height + (e.pageY - original_mouse_y);
        if (height > minimum_size) {
          element.style.height = height + 'px'
        }
      }

      else if (currentResizer.classList.contains('bottom-right')) {
        const width = original_width + (e.pageX - original_mouse_x);
        const height = original_height + (e.pageY - original_mouse_y);
        if (width > minimum_size) {
          element.style.width = width + 'px'
        }
        if (height > minimum_size) {
          element.style.height = height + 'px'
        }
      }
      else if (currentResizer.classList.contains('bottom-left')) {
        const height = original_height + (e.pageY - original_mouse_y);
        const width = original_width - (e.pageX - original_mouse_x)

        if (height > minimum_size) {
          element.style.height = height + 'px'
        }
        if (width > minimum_size) {
          element.style.width = original_width - (e.pageX - original_mouse_x)  + 'px'
          element.style.left = original_x + (e.pageX - original_mouse_x) + 'px'
        }
      }

      else if (currentResizer.classList.contains('top-right')) {
        const width = original_width + (e.pageX - original_mouse_x);
        const height = original_height - (e.pageY - original_mouse_y);
        if (width > minimum_size) {
          element.style.width = width + 'px'
        }
        if (height > minimum_size) {
          element.style.height = height + 'px'
          element.style.top = original_y + (e.pageY - original_mouse_y) + 'px'
        }
      }

      else if (currentResizer.classList.contains('top-left')) {
        const width = original_width + (e.pageX - original_mouse_x);
        const height = original_height - (e.pageY - original_mouse_y);
        if (height > minimum_size) {
          element.style.height = height + 'px'
          element.style.top = original_y + (e.pageY - original_mouse_y) + 'px'
        }
        if (width > minimum_size) {
          element.style.width = original_width - (e.pageX - original_mouse_x)  + 'px'
          element.style.left = original_x + (e.pageX - original_mouse_x) + 'px'
        }
      }
    }

    function stopResize() {
      window.removeEventListener('mousemove', resize)
    }
  }
}

resizeElement('#resize')