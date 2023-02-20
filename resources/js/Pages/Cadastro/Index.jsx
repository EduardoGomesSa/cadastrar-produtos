import React from 'react';
import PrimaryButton from '@/Components/PrimaryButton';
import { Head } from '@inertiajs/react';

export default function Index(){
    return (
        <div>
                <Head title="Cadastros" />
                
                <div className="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                    <form>
                        <p>Nome: <input type="text" /></p>  
                        <p>Preço: <input type="text" /></p>
                        <PrimaryButton>Produto</PrimaryButton>
                    </form>
                </div>
        </div>         
    );
}