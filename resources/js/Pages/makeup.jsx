import React from 'react'
import Brand from '../components/Brand'
import Layout from '../Layout/Layout'

export default function makeup({produk}) {
  return (
   <Layout>
    <Brand data={produk}/>
   </Layout>
  )
}
