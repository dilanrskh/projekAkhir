import React from 'react'
import MerkProduk from '../components/MerkProduk'
import Layout from '../Layout/Layout'

export default function brand({produk}) {
  return (
    <Layout title="Page Brand">
      <MerkProduk halo={produk}/>
    </Layout>
  )
}
