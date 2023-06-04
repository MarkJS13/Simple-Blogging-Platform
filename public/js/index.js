const bulb = document.querySelector('.light-bulb');
const blogs = document.querySelectorAll('.homepage ul li');
const posts = document.querySelectorAll('.post-tiles ul li');
const postsHeader = document.querySelector('header');
const content = document.querySelector('.detail-box');
const deleteBtn = document.querySelector('.delete');
const modal = document.querySelector('.modal');
const no = document.querySelector('.no');
const register = document.querySelectorAll('.register a');



bulb.addEventListener('click', () => {

    register.forEach(regs => {
        regs.classList.toggle('body-color');
        console.log(regs)
    })

    document.querySelector('body').classList.toggle('switch');
    postsHeader.classList.toggle('blogs-color');
    content.classList.toggle('body-color');
    

    blogs.forEach(blog => {
        blog.classList.toggle('blogs-color');
    });

    posts.forEach(post => {
        post.classList.toggle('blogs-color');
    });
        
})


deleteBtn.addEventListener('click', () => {
    modal.classList.toggle('hide-modal');
})

no.addEventListener('click', () => {
    modal.classList.toggle('hide-modal');
})
