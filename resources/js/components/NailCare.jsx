import React from 'react';

const NailCare = ({ data }) => {
    console.log(data);
    // produk = Array.from(data)
    return (
        <>

            <div className='max-w-[1240px] py-4 mt-5 '>
                <div className='grid md:grid-cols-2 pl-6'>
                    <img src="/images/beauty RECOMMEND (10).png" alt="" />
                </div>
                <div className='max-w-[1240px] mx-auto pl-8 pr-8 py-2 grid md:grid-cols-5 gap-4'>
                    {
                        data.map((nailcare) =>

                            <div className='bg-white flex flex-col justify-between items-center pt-5 pb-8 border'>
                                <div className='space-y-5 flex flex-col p-5'>
                                    <a href="#">
                                        <img
                                            className='flex flex-row mr-2  '
                                            src={`/storage/${nailcare.foto_produk}`}
                                            alt='/'
                                        />
                                    </a>
                                    <h2 className='a text-md font-semibold font-raleway'>{nailcare.nama_produk}</h2>
                                    <p className='text-md font-robot'>Rp. {nailcare.harga}</p>
                                </div>
                            </div>
                        )

                    }

                </div>

            </div>
        </>
    );
};

export default NailCare;