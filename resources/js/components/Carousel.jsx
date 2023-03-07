import React from 'react'

export default function Carousel() {
  return (
    <div className='max-w-[900px] mx-auto p-6 mb-6'>
      <div className='max-h-[300px] relative'>
        {/* Overlay */}
        <div className='absolute w-full text-gray-200 max-h-[300px] flex flex-col justify-center'>
        </div>
        <img className='w-full max-h-[300px] object-cover' src="/images/daily1.png" alt="/" />
      </div>
    </div>
  )
}
