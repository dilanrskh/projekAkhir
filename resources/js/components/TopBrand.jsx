import React, { useState } from 'react';
import Slider from 'react-slick';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import { dataDigitalBestSeller } from '../data.js';

function App() {
  const [defaultImage, setDefaultImage] = useState({});
  const settings = {
    dots: true,
    infinite: false,
    speed: 500,
    slidesToShow: 5,
    slidesToScroll: 4,
    initialSlide: 0,
    responsive: [
      {
        breakpoint: 124,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          initialSlide: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  };

  const handleErrorImage = (data) => {
    setDefaultImage((prev) => ({
      ...prev,
      [data.target.alt]: data.target.alt,
      linkDefault: imgGirl,
    }));
  };

  return (

    <div className='pb-5'>
      <div className='grid md:grid-cols-4 pl-8'>
        <img src="/images/beauty RECOMMEND (8).png" alt="" />
      </div>
      <div className='pb-3 pl-8 pr-8 mx-auto'>
        <Slider {...settings}>
          {dataDigitalBestSeller.map((item) => (

            <div className='rounded-xl relative card md:max-h-[80px] z-10'>
              <a href="#">
                <img
                  src={
                    defaultImage[item.title] === item.title
                      ? defaultImage.linkDefault
                      : item.linkImg
                  }
                  alt={item.title}
                  onError={handleErrorImage} className='max-h-[80px] md:max-h-[100px] w-60 object-cover'
                />
              </a>
            </div>
          ))}

        </Slider>
      </div>
    </div>
  );
}

export default App;