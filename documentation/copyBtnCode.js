const copyBtn = document.querySelector('.Copy-Btn'); 
            const copyText =document.querySelector('.element-to-copy').textContent;
            console.log(copyBtn);
            console.log(copyText);
            copyBtn.addEventListener('click', () => { 
               navigator.clipboard.writeText(copyText).then(() => {
         alert('Text copied to clipboard!');
          }).catch((error) => {
        console.error('Failed to copy text: ', error);
      });
              });
