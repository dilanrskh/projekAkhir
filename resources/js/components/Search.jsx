import React from 'react';


const Head = () => {

  return (
    <div className="bg-white">
      <header className="container max-w-5xl mx-auto flex flex-row items-center space-x-20 py-3">
        <a href="#">
          <img src="/images/Girl_s_Daily-removebg-preview.png" alt="logo" className='w-[100px] scale-[2]' />
        </a>
        <div className="flex-3">
          <ul className='flex flex-row space-x-6 gap-6 font-raleway uppercase text-sm font-medium'>
            <li className=' text-slate-500 hover:text-pink-900'>
              <a href="#">Home</a>
            </li>
            <li className=' text-slate-500 hover:text-pink-900'>
              <a href="">Product</a>
            </li>
            <li className=' text-slate-500 hover:text-pink-900'>
              <a href="#">Artikel</a>
            </li>
            <li className=' text-slate-500 hover:text-pink-900'>
              <a href="#">Review</a>
            </li>
            <li className=' text-slate-500 hover:text-pink-900'>
              <a href="#galery">Galeri</a>
            </li>
            <li className=' text-slate-500 hover:text-pink-900'>
              <a href="#information">Information</a>
            </li>
          </ul>
        </div>
        <div className="space-x-5 flex flex-row items-center ">
          <button className="rounded-md ring ring-pink-500 ring-offset-2  dark:ring-offset-white bg-white hover:bg-pink-400 py-1 px-3 font-raleway text-sm">Log In or Register</button>
        </div>
      </header>
    </div>
  );
};

export default Head;