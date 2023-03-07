import React from 'react'

export default function Footer() {
    return (
        <section className='bg-white w-full pb-5'>
            <hr class="h-px my-8 mx-20 bg-gray-200 border-0 dark:bg-gray-300"></hr>
            <div className='container mx-auto max-w-10xl flex flex-row'>
                <div className='flex-3 ml-10'>
                    <ul>
                        <li className='font-poppins font-medium uppercase text-md mb-1'>Information</li>
                        <li className='font-opensans text-slate-400 hover:text-pink-800'>
                            <a href="#">Privasi</a>
                        </li>
                        <li className='font-opensans text-slate-400 hover:text-pink-800'>
                            <a href="#">Bantuan</a>
                        </li>
                        <li className='font-opensans text-slate-400 hover:text-pink-800'>
                            <a href="#">About Me</a>
                        </li>
                        <li className='font-opensans text-slate-400 hover:text-pink-800'>
                            <a href="#">Feedback</a>
                        </li>
                        <li className='font-opensans text-slate-400 hover:text-pink-800'>
                            <a href="#">Help</a>
                        </li>
                    </ul>
                </div>
                <div className='flex-2 ml-20'>
                    <ul>
                        <li className='font-poppins font-medium uppercase text-md mb-1'>Find Us</li>
                        <li className='text-left text-slate-400 text-sm font-opensans'>Dila Nur Sakinah, Jurusan Programmer, Politeknik IDN</li>
                    </ul>
                </div>
                <div className='flex-2 ml-8'>
                    <ul>
                        <li className='font-poppins font-medium uppercase text-md'>Contact Us</li>
                        <li className='font-opensans text-sm text-slate-400 hover:text-pink-800'>
                            <a href="#" className='underline'>dilanursakinah02@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div className='flex-5 space-y-4 ml-10 mr-10 '>
                    <img src="/images/Girl_s_Daily-removebg-preview.png" alt="logo-footer" className='w-36' />
                    <div className='font-opensans text-slate-400'>Girl's Daily adalah website untuk melihat review atau penjelasan dari sebuah produk kecantikan.
                        Tidak hanya review, tapi kamu juga dapat menemukan artikel dan hal menarik lainnya disini.
                    </div>
                    <div className='flex flex-row'>
                        <a href="https://www.instagram.com/dldealdaa/">
                            <img src="/images/png-clipart-logo-black-and-white-instagram-logo-miscellaneous-text-thumbnail-removebg-preview.png" alt="intagram-logo" className='w-10 h-10' />
                        </a>
                        <a href="https://wa.me/+6282316152763">
                            <img src="/images/image_processing20210717-12803-ulz73n.png" alt="whatsapp-logo" className='w-8 h-8' />
                        </a>
                        <a href="https://www.youtube.com/channel/UC0HPcg9jXreDfDZ1ng2kCTA">
                            <img src="/images/-41603716041ywrshprcyv-removebg-preview.png" alt="youtube-logo" className='w-10 h-10' />
                        </a>

                    </div>
                </div>
            </div>
        </section>
    )
}
