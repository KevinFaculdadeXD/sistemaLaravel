<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LivroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:250',
            'data_publicacao' => 'required|date|before_or_equal:today',
            'autor' => 'required|string|max:255',
            'quantidade_estoque' => 'required|integer|gte:1',
            'tema_id' => 'required|integer',
            'descricao' => 'required|string|max:1500'
        ];
    }

    public function messages(): array
{
    return [
        'titulo.required' => 'O título do livro é obrigatório.',
        'titulo.string' => 'O título deve ser um texto.',
        'titulo.max' => 'O título pode ter no máximo 250 caracteres.',

        'data_publicacao.required' => 'A data de publicação é obrigatória.',
        'data_publicacao.date' => 'A data de publicação deve ser uma data válida.',
        'data_publicacao.before_or_equal' => 'A data de publicação não pode ser uma data futura.',

        'autor.required' => 'O autor do livro é obrigatório.',
        'autor.string' => 'O autor deve ser um texto.',
        'autor.max' => 'O nome do autor pode ter no máximo 255 caracteres.',

        'quantidade_estoque.required' => 'A quantidade em estoque é obrigatória.',
        'quantidade_estoque.integer' => 'A quantidade em estoque deve ser um número inteiro.',
        'quantidade_estoque.gte' => 'A quantidade em estoque deve ser no mínimo 1.',

        'tema_id.required' => 'O tema do livro é obrigatório.',
        'tema_id.integer' => 'O tema selecionado é inválido.',

        'descricao.required' => 'A descrição do livro é obrigatória.',
        'descricao.string' => 'A descrição deve ser um texto.',
        'descricao.max' => 'A descrição pode ter no máximo 1500 caracteres.',
    ];
}
}
