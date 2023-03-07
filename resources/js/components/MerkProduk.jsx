import React from 'react';

const MerkProduk = ({ halo }) => {
    console.log(halo);
    // produk = Array.from(halo)
    return (
        <>

            <div className='max-w-[1240px] py-4 mt-5 '>
                <div className='max-w-[1240px] mx-auto pl-8 pr-8 py-2 grid md:grid-cols-5 gap-4'>
                    {
                        halo.map((merkproduk) =>

                            <div>
                                <h1>{merkproduk.merk_produk}</h1>
                            </div>
                        )
                    }

                </div>

            </div>
        </>
    );
};

export default MerkProduk;