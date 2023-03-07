import React from 'react'
import BodyCare from '../components/BodyCare'
import Layout from '../Layout/Layout'

export default function bodycare({bodycare}) {
  return (
    <Layout>
        <BodyCare data={bodycare}/>
    </Layout>
  )
}
