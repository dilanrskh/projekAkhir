import React from 'react'
import Carousel from '../components/Carousel'
import Information from '../components/Information'
import Quotes from '../components/Quotes'
import Layout from '../Layout/Layout'
import Galeri from '../components/Galeri'
import TypeProduk from '../components/TypeProduk'
import TopBrand from '../components/TopBrand'
import Brand from '../components/Brand'


export default function landing({ produk }) {
  return (
    <Layout title={"Girl's Daily"}>

      <Carousel />
      <Quotes />

      {/* <Brand data={produk} /> */}

      <TopBrand />
      <TypeProduk />

      <Galeri />
      <Information />
    </Layout>
  )
}
