import React from 'react'
import NailCare from '../components/NailCare'
import Layout from '../Layout/Layout'

export default function nailcare({nailcare}) {
  return (
    <Layout>
        <NailCare data={nailcare}/>
    </Layout>
  )
}
