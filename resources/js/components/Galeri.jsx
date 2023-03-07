import React from 'react';

const Galeri = () => {
  return (
    <div id='galery' className='max-w-[1300px] h-[350px] bg-rose-200/50	color: rgb(254 205 211); mx-auto mt-20 mb-5 pt-16 lg:mb-[15%] md:mb-[35%] px-4 grid lg:grid-cols-3 gap-4'>
      <div className='mt-10 relative lg:col-span-1 col-span-2'>
        <img src="/images/beauty_RECOMMEND__1_-removebg-preview.png" alt="images" className='a shadow-inherit' />
        <hr class="w-48 h-1 mx-auto bg-white border-0 rounded dark:bg-gray-500/50"></hr>
        <p className='capitalize text-center mt-8 font-poppins font-sm font-semibold text-slate-600'>Trusted, authentic, and handpicked with a lot of love.
          Girl' Daily is here to cure your daily dilemma of review for beauty products</p>
      </div>

      <div className='grid grid-cols-3 col-span-2 gap-2 items-end'>
        <img
          className='object-cover w-full h-full py-10'
          src='/images/b165ae0bc0f32f811f974937ae1e4d21.jpg'
          alt='/'
        />
        <img
          className='object-cover w-full h-full py-10'
          src='/images/334ea1bb2741852c53a942420544918f.jpg'
          alt='/'
        />
        <img
          className='object-cover w-full h-full py-10'
          src='/images/53164679ac9415c93fda2538b635ab82.jpg'
          alt='/'
        />
      </div>
    </div>
  );
};

export default Galeri;