import React from 'react'
import Skincare from '../components/Skincare'
import Layout from '../Layout/Layout'

export default function skincare({skincare}) {
  return (
    <Layout>
        <Skincare data={skincare}/>
    </Layout>
  )
}
