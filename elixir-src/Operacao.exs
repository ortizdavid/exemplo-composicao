defmodule Operacao do

  def transformar_lista(lista) do
    lista
    |> Enum.map(fn num -> num * 2 end)
    |> Enum.filter(fn num -> num < 30 end)
    |> Enum.sort()
    |> Enum.reverse()
  end

  def transformar_texto(texto) do
    texto
    |> String.trim()
    |> String.replace(",", ".")
    |> String.upcase()
    |> String.duplicate(2)
  end

end
