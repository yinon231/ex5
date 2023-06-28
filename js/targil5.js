function loadtoSelect(data)
{
    const select=document.getElementById('select');
    select.onclick=()=>{
        const booksArray=document.getElementsByClassName('card');
       for(let i=0;i<booksArray.length;i++)
       {
        const bookCategory=booksArray[i].querySelector('.card-text').innerHTML;
        if(select.value==bookCategory || select.value=="All")
        {
            booksArray[i].style.display='flex';
        }
        else booksArray[i].style.display='none';
       }

    }
    for(key in data)
    {
       const option=document.createElement('option');
       option.value=data[key];
       option.innerHTML=data[key]; 
       select.appendChild(option);
    }
}

fetch("includes/categories.json")
.then(response=>response.json())
.then(data=>loadtoSelect(data));