FROM python:3.8

RUN apt-get update && apt-get install -y some-dependency

WORKDIR /app

COPY requirements.txt /app
RUN pip install -r requirements.txt

COPY . /app

CMD ["python", "app.py"]
