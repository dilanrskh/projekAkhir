import React from 'react'
import { Head } from '@inertiajs/inertia-react'
import Header from '../components/Header'
import Navbar from '../components/Navbar'
import Footer from '../components/Footer'
import Foot from '../components/Foot'
import Search from '../components/Search'

export default function Layout({title, children}) {
  return (
    <>
      <Head>
        <title>{ title }</title>
      </Head>

      <Header/>

      <Search/>

      <Navbar/>

      { children }
      
      <Footer/>

      <Foot/>
    </>
  )
}
