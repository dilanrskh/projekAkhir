import React from 'react'
import HairCare from '../components/HairCare'
import Layout from '../Layout/Layout'

export default function haircare({haircare}) {
  return (
    <Layout>
        <HairCare data={haircare}/>
    </Layout>
  )
}
