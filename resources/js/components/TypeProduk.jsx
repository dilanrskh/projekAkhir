import React from 'react';

const TypeProduk = () => {
    return (
        <div className='max-w-[1640px] pb-8'>
            <div className='grid md:grid-cols-3 pl-8'>
                <img src="/images/beauty RECOMMEND (9).png" alt="" />
            </div>
            <div className='max-w-[1640px] mx-auto pl-8 pr-8 py-2 grid md:grid-cols-5 gap-6'>
                {/* Card */}
                <div className='rounded-xl relative md:max-h-[100px]'>
                    {/* Overlay */}

                    <a href="/makeup/product">
                        <div className='absolute w-full h-full bg-slate-600/50 rounded-xl text-white'>
                            <p className='font-bold text-2xl px-2 pt-8 capitalize text-center font-raleway shadow-slate-800'>Make Up</p>
                        </div>
                        <img
                            className='max-h-[160px] md:max-h-[100px] w-full object-cover rounded-xl'
                            src='/images/5cba02ebb48ae377debf644b8cc56720.jpg'
                            alt='/'
                        />
                    </a>

                </div>
                {/* Card */}

                {/* Card */}
                <div className='rounded-xl relative md:max-h-[100px]'>
                    {/* Overlay */}

                    <a href="/skincare/product">
                        <div className='absolute w-full h-full bg-slate-600/50 rounded-xl text-white'>
                            <p className='font-bold text-2xl px-2 pt-8 capitalize text-center font-raleway shadow-slate-800'>Skincare</p>
                        </div>
                        <img
                            className='max-h-[160px] md:max-h-[100px] w-full object-cover rounded-xl'
                            src='/images/PRO TIP 🌟put your face milks in the refrigerator for a nice cool application! (1).jpeg'
                            alt='/'
                        />
                    </a>


                </div>
                {/* Card */}

                {/* Card */}
                <div className='rounded-xl relative md:max-h-[100px]'>
                    {/* Overlay */}
                    <a href="/haircare/product">
                        <div className='absolute w-full h-full bg-slate-600/50 rounded-xl text-white'>
                            <p className='font-bold text-2xl px-2 pt-8 capitalize text-center font-raleway shadow-slate-800'>Hair Care</p>
                        </div>
                        <img
                            className='max-h-[160px] md:max-h-[100px] w-full object-cover rounded-xl'
                            src='/images/e573bba3d6c8e7b79ff925418afa4844.jpg'
                            alt='/'
                        />
                    </a>

                </div>
                {/* Card */}

                {/* Card */}
                <div className='rounded-xl relative md:max-h-[100px]'>
                    {/* Overlay */}
                    <a href="/bodycare/product">
                        <div className='absolute w-full h-full bg-slate-600/50 rounded-xl text-white'>
                            <p className='font-bold text-2xl px-2 pt-8 capitalize text-center font-raleway shadow-slate-800'>Body Care</p>
                        </div>
                        <img
                            className='max-h-[160px] md:max-h-[100px] w-full object-cover rounded-xl'
                            src='/images/e65cf46ae27947afc536dd5986af3948.jpg'
                            alt='/'
                        />
                    </a>

                </div>
                {/* Card */}

                {/* Card */}
                <div className='rounded-xl relative md:max-h-[100px]'>
                    {/* Overlay */}
                    <a href="/nailcare/product">
                        <div className='absolute w-full h-full bg-slate-600/50 rounded-xl text-white'>
                            <p className='font-bold text-2xl px-2 pt-8 capitalize text-center font-raleway shadow-slate-800'>Nail Care</p>
                        </div>
                        <img
                            className='max-h-[160px] md:max-h-[100px] w-full object-cover rounded-xl'
                            src='/images/3445b9b64aa1822d76dd9508861adee4.jpg'
                            alt='/'
                        />
                    </a>

                </div>
                {/* Card */}

            </div>
        </div>
    );
};

export default TypeProduk;