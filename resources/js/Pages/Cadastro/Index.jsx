import React from 'react';
import PrimaryButton from '@/Components/PrimaryButton';
import { useForm, Head } from '@inertiajs/react';

export default function Index(){
    const { data, setData, post, processing, reset, errors } = useForm({
        nome: '',
        preco: 0
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('cadastros.store'), { onSuccess: () => reset() });
    };

    return (
        <div>
                <Head title="Cadastros"></Head>
                
                <div className="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                    <form onSubmit={submit}>
                        <p>Nome: <input type="text" onChange={e => setData('nome', e.target.value)} /></p>  
                        <p className='mt-4'>Preço: <input type="text" onChange={e => setData('preco', e.target.value)} /></p>
                        <PrimaryButton className='mt-4' processing={processing}>Produto</PrimaryButton>
                    </form>
                </div>
        </div>         
    );
}