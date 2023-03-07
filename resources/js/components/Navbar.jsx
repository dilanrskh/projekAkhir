import { Link } from '@inertiajs/react'
import React from 'react'

export default function Navbar() {
  return (
    <header className='head flex container mx-auto'>
            <nav className='w-full bg-pink-400 color: rgb(236 72 153); py-2'>
                <ul className='flex gap-12 uppercase justify-center font-poppins font-medium shadow-slate-400'>
                <li className='italic font-raleway font-weight-normal text-white'>Explore</li>
                    <li className='text-white hover:text-pink-800'>
                        <a href="/girldaily">Home</a>
                    </li>
                    <li className='text-white hover:text-pink-800'>
                        {/* <Link href="/brand">Brand</Link> */}
                        <a href="/brand">Brand</a>

                    </li>
                    <li className='text-white hover:text-pink-800'>
                        <a href="/skincare/product">Skincare</a>
                    </li>
                    <li className='text-white hover:text-pink-800'>
                        <a href="/makeup/product">Make Up</a>
                    </li>
                    <li className='text-white hover:text-pink-800'>
                        <a href="/haircare/product">Hair Care</a>
                    </li>
                    <li className='text-white hover:text-pink-800'>
                        <a href="/bodycare/product">Body Care</a>
                    </li>
                    <li className='text-white hover:text-pink-800'>
                        <a href="/nailcare/product">Nail Care</a>
                    </li>
                    <li className='text-white hover:text-pink-800'>
                        <a href="/fragrance/product">Fragrance</a>
                    </li>
                </ul>
            </nav>
    </header>
  )
}
