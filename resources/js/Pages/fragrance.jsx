import React from 'react'
import Fragrance from '../components/Fragrance'
import Layout from '../Layout/Layout'

export default function fragrance({fragrance}) {
  return (
    <Layout>
        <Fragrance data={fragrance}/>
    </Layout>
  )
}
